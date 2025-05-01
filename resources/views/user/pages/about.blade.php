@extends('layouts.app')

@section('content')
<section class="bg-gray-100 py-16">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">Timeline Pendidikan</h2>

        <div class="relative border-l-4 border-blue-500 pl-6 space-y-8">
            @foreach ($educations as $edu)
                <div class="bg-white p-4 shadow-md rounded-lg relative">
                    <div class="absolute -left-3 top-4 bg-blue-500 w-6 h-6 rounded-full border-4 border-white"></div>
                    <p class="text-sm text-gray-500">{{ $edu->year }}</p>
                    <h3 class="text-xl font-semibold text-gray-800">{{ $edu->institution }}</h3>
                    <p class="text-gray-700">{{ $edu->major }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
