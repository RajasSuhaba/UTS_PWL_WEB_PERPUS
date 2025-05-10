<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Perpustakaan </title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <!-- Favicon -->
    @if(isset($setting->favicon))
        <link rel="icon" href="{{ asset(Storage::url($setting->favicon)) }}">
    @endif
    <!-- Styles -->
    <link rel="stylesheet" href="/assets/app.css">

    <style>
        body {
            background-image: url('/assets/img/bg_login.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            font-family: 'Figtree', sans-serif;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.6);
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .content {
            position: relative;
            z-index: 10;
        }

        .decor-image {
            position: absolute;
            bottom: 0;
            right: 0;
            max-width: 300px;
            opacity: 0.4;
            z-index: 1;
        }

        a.btn {
            transition: all 0.3s ease;
        }

        a.btn:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.3);
        }

        h1, h2, p, span {
            color: #f0f8ff; /* warna terang */
        }

        .icon-container {
            background-color: rgba(255, 255, 255, 0.1);
            border: 2px solid #fff;
        }

        .icon-container img {
            filter: brightness(200%);
        }

        h1 {
            font-size: 3.5rem;
        }

        h2 {
            font-size: 2.5rem;
            color: #ffbebe;
        }

        p {
            font-size: 1.25rem;
        }

        span {
            font-size: 1.25rem;
        }
    </style>
</head>
<body class="antialiased text-gray-100">
    <div class="overlay"></div>

    <div class="min-h-screen flex items-center justify-center content">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center mt-20 text-center">
                <h1 class="font-bold mb-4">Selamat Datang di</h1>
                <h2 class="font-semibold mb-6">{{ App\Models\Setting::first()->webname }}</h2>
                <p class="max-w-xl">Sistem Informasi Perpustakaan Kampus - Masuk untuk mengakses layanan perpustakaan secara online dan nikmati kemudahan akses buku digital.</p>

                <div class="flex flex-col md:flex-row mt-10 space-y-4 md:space-y-0 md:space-x-6">
                    <a href="{{ route('login') }}" class="btn bg-white/20 backdrop-blur shadow-lg rounded-xl px-6 py-4 flex items-center justify-center space-x-3 hover:bg-white/30 w-full md:w-auto">
                        <div class="w-10 h-10 icon-container rounded-full flex items-center justify-center">
                            <img src="https://www.svgrepo.com/show/408745/login-sign-in-user-entrance-account.svg" alt="Login Icon" class="w-6 h-6">
                        </div>
                        <span class="font-semibold">Masuk</span>
                    </a>
                    <a href="{{ route('register') }}" class="btn bg-white/20 backdrop-blur shadow-lg rounded-xl px-6 py-4 flex items-center justify-center space-x-3 hover:bg-white/30 w-full md:w-auto">
                        <div class="w-10 h-10 icon-container rounded-full flex items-center justify-center">
                            <img src="https://www.svgrepo.com/show/515135/book.svg" alt="Register Icon" class="w-6 h-6">
                        </div>
                        <span class="font-semibold">Daftar</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative background image (optional) -->
        <img src="/assets/img/bg1.jpg" alt="Decorative Image" class="decor-image hidden md:block">
    </div>

    <script src="/assets/app.js"></script>
</body>
</html>
