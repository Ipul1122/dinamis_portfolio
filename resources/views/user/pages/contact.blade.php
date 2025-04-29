@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <div class="md:flex">
            <!-- Left Side - Map and Contact Info -->
            <div class="md:w-1/2 bg-gray-50 p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Lokasi Kami</h2>
                
                <!-- Google Maps -->
                <div class="mb-6 rounded-lg overflow-hidden shadow-sm">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.362968354606!2d106.67343217413112!3d-6.215771460879697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f98134b54ff3%3A0xd0e8009a05feb48c!2sPT.%20Radar%20Teknologi%20Komputer!5e0!3m2!1sid!2sid!4v1745902766991!5m2!1sid!2sid"
                        width="100%" 
                        height="250" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="rounded-lg">
                    </iframe>
                </div>
                
                <!-- Contact Info -->
                <div class="space-y-4 text-gray-600">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p>PT. Radar Teknologi Komputer</p>
                            <p>Jakarta, Indonesia</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p>info@radarteknologi.com</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p>+62 21 12345678</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side - Contact Form -->
            <div class="md:w-1/2 p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Hubungi Kami</h2>
                
                <!-- Success Alert (Hidden by default) -->
                <div id="success-alert" class="hidden bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded" role="alert">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm">Pesan berhasil dikirim! Akan kami response dalam waktu tertentu</p>
                        </div>
                    </div>
                </div>
                
                <!-- Laravel Flash Message -->
                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded" role="alert">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                
                <form id="contact-form" action="{{ route('user.contact.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                        @error('nama')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="telp" class="block text-sm font-medium text-gray-700 mb-1">Nomor WhatsApp</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 text-gray-500 bg-gray-100 border border-r-0 border-gray-300 rounded-l-md">
                                +62
                            </span>
                            <input type="tel" id="telp" name="telp" placeholder="8xxxxxxxxx" class="flex-1 min-w-0 w-full border-gray-300 rounded-none rounded-r-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                                   pattern="[0-9]{9,13}" title="Masukkan nomor tanpa 0 di awal, contoh: 812345678" required>
                        </div>
                        @error('telp')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                        <p class="text-xs text-gray-500 mt-1">Masukkan nomor tanpa 0 di awal, contoh: 812345678</p>
                    </div>
                    
                    <div>
                        <label for="kerjasama" class="block text-sm font-medium text-gray-700 mb-1">Pesan / Kerja Sama</label>
                        <textarea id="kerjasama" name="kerjasama" rows="4" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required></textarea>
                        @error('kerjasama')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="pt-2">
                        <button type="submit" id="submit-btn" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const nama = document.getElementById('nama').value;
        const telp = document.getElementById('telp').value;
        const kerjasama = document.getElementById('kerjasama').value;
        
        // Submit the form data via AJAX
        fetch(form.action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: JSON.stringify({
                nama: nama,
                telp: telp,
                kerjasama: kerjasama
            })
        })
        .then(response => response.json())
        .then(data => {
            // Show success message
            const successAlert = document.getElementById('success-alert');
            successAlert.classList.remove('hidden');
            
            // Prepare WhatsApp message
            const message = `Halo, saya ${nama}. ${kerjasama}`;
            const encodedMessage = encodeURIComponent(message);
            
            // Format phone number (remove leading 0 and add country code if needed)
            let formattedPhone = telp;
            if (formattedPhone.startsWith('0')) {
                formattedPhone = '6285693672730' + formattedPhone.substring(1);
            } else if (!formattedPhone.startsWith('6285693672730')) {
                formattedPhone = '6285693672730' + formattedPhone;
            }
            
            // Wait 2 seconds before redirecting to WhatsApp
            setTimeout(() => {
                window.location.href = `https://wa.me/6285693672730${formattedPhone}?text=${encodedMessage}`;
            }, 2000);
        })
        .catch(error => {
            console.error('Error:', error);
        });

                // Reload halaman otomatis setelah 3 detik
                setTimeout(() => {
            window.location.href = "{{ route('user.contact') }}"; // ganti dengan rute halaman kontak
        }, 1000);

    });
});
</script>
@endsection