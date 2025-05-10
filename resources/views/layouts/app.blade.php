@php
    $setting = \App\Models\Setting::first();
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistem Informasi Perpustakaan Kampus') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset(Storage::url($setting->favicon ?? 'favicons/favicon.ico')) }}" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/app.css">
    <link rel="stylesheet" href="/assets/watermark.css">

    <!-- Scripts -->
    <script src="/assets/app.js" defer></script>

    <!-- Watermark Style -->
    <style>
        .watermark::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-image: url('{{ asset('storage/' . ($setting->logo ?? 'default-logo.png')) }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 300px;
            opacity: 0.04;
            pointer-events: none;
            z-index: -1;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="watermark min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <main>
            {{ $slot }}
        </main>

        @include('layouts.footer')
    </div>
</body>

</html>
