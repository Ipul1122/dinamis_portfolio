@extends('layouts.app')

@section('content')
<section class="bg-gray-50 py-16">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Pengalaman Kerja</h2>

        <div class="relative border-l-4 border-yellow-500 pl-6 space-y-10">
            @foreach ($works as $work)
                <div class="relative bg-white p-6 shadow-md rounded-md">
                    <div class="absolute -left-3 top-4 bg-yellow-500 w-6 h-6 rounded-full border-4 border-white"></div>
                    <p class="text-sm text-gray-500">{{ $work->year }}</p>
                    <h3 class="text-xl font-semibold text-gray-800">{{ $work->work_at }} - <span class="text-yellow-600">{{ $work->as }}</span></h3>
                    <p class="text-gray-700 mt-2">{{ $work->paragraph }}</p>

                    @php
                        $listItems = is_array($work->list) ? $work->list : json_decode($work->list, true);
                    @endphp

                    @if($listItems && is_array($listItems))
                        <ul class="list-disc pl-5 mt-3 text-gray-700 space-y-1">
                            @foreach($listItems as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-10">
            {{ $works->links('vendor.pagination.tailwind') }}
        </div>

    </div>
</section>
@endsection
