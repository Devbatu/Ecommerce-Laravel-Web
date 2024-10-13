<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/userpage',[HomeController::class,'userpage']);
Route::get('/cart',[HomeController::class,'cart']);
Route::get('/shop',[HomeController::class,'shop']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/servicesupport',[HomeController::class,'servicesupport']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/blogpage',[HomeController::class,'blogpage']);
Route::get('/catagory',[AdminController::class,'catagory']);
Route::get('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);
Route::post('/add_catagory',[AdminController::class,'add_catagory']);
Route::get('/product',[AdminController::class,'product']);
Route::get('/productspage',[AdminController::class,'productspage']);
Route::post('/add_product',[AdminController::class,'add_product']);
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
Route::get('/update_product/{id}',[AdminController::class,'update_product']);
Route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);
Route::get('/product_details/{id}',[HomeController::class,'product_details']);
Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);
Route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);
Route::get('/clear_deleted_cart', [CartController::class, 'clearDeletedCart'])->name('clear_deleted_cart');

