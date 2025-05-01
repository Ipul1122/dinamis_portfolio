@extends('layouts.app')

@section('content')
<section class="bg-gray-50 py-16">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Pengalaman Scients</h2>

        <div class="relative border-l-4 border-blue-500 pl-6 space-y-10">
            @foreach ($scients as $scient)
                <div class="relative bg-white p-6 shadow-md rounded-md">
                    <div class="absolute -left-3 top-4 bg-blue-500 w-6 h-6 rounded-full border-4 border-white"></div>
                <p class="text-sm  text-gray-600">{{ $scient->year }}</p>
                    <h3 class="text-xl font-semibold text-blue-800 ">{{ $scient->title }}</span></h3>
                    <p class="text-gray-700 mt-2">{{ $scient->paragraph }}</p>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-10">
            {{ $scients->links('vendor.pagination.tailwind') }}
        </div>

    </div>
</section>
@endsection
