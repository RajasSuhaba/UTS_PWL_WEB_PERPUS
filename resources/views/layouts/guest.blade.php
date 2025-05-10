<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="/assets/app.css">
</head>

<body class="font-sans text-gray-900 antialiased bg-cover bg-center" style="background-image: url('{{ asset('assets/img/bg_login.jpg') }}')">
    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col items-center justify-center space-y-6">

            <!-- Logo -->
            <a href="/" class="mb-4">
                <x-application-logo class="w-24 h-24 fill-current text-white" />
            </a>

            <!-- Form Container -->
            <div class="w-full sm:max-w-md px-6 py-8 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md shadow-lg rounded-lg">
                {{ $slot }}
            </div>

        </div>
    </div>

    @include('layouts.footer')

    <script src="/assets/app.js"></script>
</body>
</html>
