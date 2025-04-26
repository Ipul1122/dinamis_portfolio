<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Dinamis Portfolio') }}</title>

    {{-- Pastikan kamu menggunakan Vite dan sudah build Tailwind dengan benar --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    @stack('scripts')

    {{-- Optional: Tambahkan Favicon, Meta tambahan, Font Poppins dari Google jika ingin --}}
</head>
<body class="bg-white text-gray-800 font-sans">

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Konten --}}
    <main class="min-h-screen py-6">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-white border-t mt-12">
        <div class="max-w-7xl mx-auto px-4 py-6 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} Dinamis Portfolio. All rights reserved.
        </div>
    </footer>

</body>
</html>
