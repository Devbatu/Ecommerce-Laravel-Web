<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Website Logo and Texts -->
        <title>{{ config('app.name', 'Batucommerce') }}</title>
        <link rel="icon" type="image/x-icon" href="C:\Users\VICTUS\Desktop\Yeni klasör (6)\Proje-Trial\Batucommerce\resources\views\images\whitelogo.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <meta name="keywords" content="bootstrap, bootstrap4" />

        <!-- Bootstrap CSS -->
        <link href="home/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="home/css/tiny-slider.css" rel="stylesheet">
        <link href="home/css/style.css" rel="stylesheet">
        @livewireStyles
    </head>
    <body class="font-sans antialiased">


            <!-- Page Heading -->
        @include('home.header')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        
        @include('home.footer')

        @livewireScripts
        <script src="home/js/bootstrap.bundle.min.js"></script>
		<script src="home/js/tiny-slider.js"></script>
		<script src="home/js/custom.js"></script>
    </body>
</html>
