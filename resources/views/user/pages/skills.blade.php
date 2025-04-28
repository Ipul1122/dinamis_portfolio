@extends('layouts.app')

@section('content')
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<section class="py-20 bg-gradient-to-b from-white to-gray-100 min-h-screen">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-12" data-aos="fade-down">My Skills</h2>
        
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8">
            @foreach ($skills as $skill)
                <div 
                    class="bg-white rounded-2xl shadow-lg p-6 flex items-center justify-center transform transition duration-300 hover:scale-105 hover:shadow-2xl"
                    data-aos="{{ $loop->iteration % 2 == 0 ? 'fade-left' : 'fade-right' }}"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out"
                >
                    <p class="text-lg font-semibold text-gray-700">{{ $skill->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({
    once: false, // supaya animasi jalan lagi kalau scroll up/down
});
</script>

<!-- Smooth Scroll -->
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
@endsection
