<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HotelHub') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-50">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="flex justify-between h-16 items-center">

                <!-- LOGO -->
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-blue-600">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <!-- LINKS -->
                <div class="flex items-center gap-6">
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md transition">Home</a>
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md transition">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md transition">Register</a>
                    @endif
                </div>

            </div>
        </div>
    </nav>

    <!-- HERO / MAIN CONTENT -->
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-12 px-6 lg:px-12">
        <div class="text-center mb-10 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
                Selamat Datang di {{ config('app.name', 'Laravel') }}
            </h1>
            <p class="text-gray-600 text-lg">
                Kelola pemesanan hotel, lihat promo menarik, dan nikmati pengalaman menginap nyaman dengan sistem kami. Silakan login atau daftar untuk memulai.
            </p>
        </div>

        <!-- FORM CONTAINER LEBIH LEBAR -->
        <div class="w-full sm:max-w-3xl bg-white shadow-lg overflow-hidden sm:rounded-xl p-8">
            {{ $slot }} <!-- Slot untuk form login/register -->
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="mt-12 w-full bg-gray-100 border-t border-gray-200 py-6 text-center text-gray-600 text-sm">
        © {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
    </footer>

</body>
</html>
