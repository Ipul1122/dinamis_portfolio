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
{{-- <body class="bg-white text-gray-800 font-sans"> --}}

    <div class="p-6 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-2 text-center">Halo Admin 👋</h1>
            <p class="text-gray-600 mb-8 text-lg text-center">Mari lihat, apa yang kamu mau lakukan</p>
    
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Card -->
                <a href="{{ route('admin.home.index') }}" class="group bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300 border border-transparent hover:border-blue-400">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-blue-500 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6" />
                        </svg>
                        <h2 class="ml-3 text-xl font-semibold text-gray-800">Home Section</h2>
                    </div>
                    <p class="text-gray-600">Atur bagian homepage portfolio kamu.</p>
                </a>
    
                <a href="{{ route('admin.about.index') }}" class="group bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300 border border-transparent hover:border-blue-400">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-blue-500 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5.121 17.804A13.937 13.937 0 0112 15c2.21 0 4.293.535 6.121 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <h2 class="ml-3 text-xl font-semibold text-gray-800">About Section</h2>
                    </div>
                    <p class="text-gray-600">Edit informasi tentang dirimu.</p>
                </a>
    
                <a href="{{ route('admin.experience.work.index') }}" class="group bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300 border border-transparent hover:border-blue-400">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-blue-500 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M9 17v-6h6v6M9 3h6a2 2 0 012 2v4H7V5a2 2 0 012-2zM7 9v10a2 2 0 002 2h6a2 2 0 002-2V9H7z" />
                        </svg>
                        <h2 class="ml-3 text-xl font-semibold text-gray-800">Work Experience</h2>
                    </div>
                    <p class="text-gray-600">Kelola pengalaman kerjamu.</p>
                </a>
    
                <a href="{{ route('admin.experience.scient.index') }}" class="group bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300 border border-transparent hover:border-blue-400">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-blue-500 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 6V4m0 16v-2m8-6h2M2 12h2m15.364 6.364l1.414-1.414M4.222 4.222l1.414 1.414M4.222 19.778l1.414-1.414M18.364 5.636l1.414 1.414" />
                        </svg>
                        <h2 class="ml-3 text-xl font-semibold text-gray-800">Scient Experience</h2>
                    </div>
                    <p class="text-gray-600">Kelola pengalaman ilmiahmu.</p>
                </a>
    
                <a href="{{ route('admin.skills.index') }}" class="group bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300 border border-transparent hover:border-blue-400">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-blue-500 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M6 20h12M6 4h12M6 12h12" />
                        </svg>
                        <h2 class="ml-3 text-xl font-semibold text-gray-800">Skills</h2>
                    </div>
                    <p class="text-gray-600">Kelola daftar skill kamu.</p>
                </a>
    
                <a href="{{ route('admin.contact.index') }}" class="group bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300 border border-transparent hover:border-blue-400">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-blue-500 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M21 10c0 3.866-3.582 7-8 7s-8-3.134-8-7 3.582-7 8-7 8 3.134 8 7zM3 21l4-4m0 0h10m-10 0l4-4" />
                        </svg>
                        <h2 class="ml-3 text-xl font-semibold text-gray-800">Contact</h2>
                    </div>
                    <p class="text-gray-600">Kelola informasi kontak.</p>
                </a>
            </div>
        </div>
    </div>
    
    












    {{-- Navbar
    @include('layouts.navbar')

    {{-- Konten --}}
    {{-- <main class="min-h-screen py-6"> --}}
        {{-- @yield('content') --}}
    {{-- </main> --}}

    {{-- Footer --}}
    {{-- @include('layouts.footer') --}}

    {{-- Optional: Tambahkan script tambahan jika diperlukan --}}
    {{-- <script src="https://unpkg.com/lucide@latest"></script> --}}
{{-- <script> --}}
{{-- //   lucide.createIcons(); --}}
{{-- </script> --}} 

</body>
</html>
