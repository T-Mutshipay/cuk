<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PatientPorta') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
		
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
