<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, mixed>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'phone' => ['nullable', 'string', 'max:20'], // Telefon alanı
            'address' => ['nullable', 'string', 'max:255'], // Adres alanı
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        // Profil fotoğrafını güncelleme
        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        // Eğer email değiştiyse ve kullanıcı doğrulanmışsa
        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            // Kullanıcı bilgilerini zorla güncelleme (forceFill)
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'], // Telefonu güncelleme
                'address' => $input['address'], // Adresi güncelleme
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        // Doğrulanmış kullanıcının bilgilerini güncelleme
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'], // Telefonu güncelleme
            'address' => $input['address'], // Adresi güncelleme
            'email_verified_at' => null,
        ])->save();

        // Email doğrulama bildirimi gönderme
        $user->sendEmailVerificationNotification();
    }
}