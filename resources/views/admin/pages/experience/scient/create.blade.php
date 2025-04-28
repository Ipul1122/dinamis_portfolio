@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-6">Tambah Timeline Pengalaman Scient</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.experience.scient.store') }}" method="POST" class="space-y-4">
        @csrf
        {{-- YEAR --}}
        <div>
            <label class="block font-semibold">Year</label>
            <input type="text" name="year" class="w-full border p-2 rounded" placeholder="2019 - Present" required>
        </div>
        {{-- WORK AT --}}
        <div>
            <label class="block font-semibold">Experience at</label>
            <input type="text" name="title" class="w-full border p-2 rounded" placeholder="title" required>
        </div>
        {{-- PARAGRAPH --}}
        <div>
            <label class="block font-semibold">Paragraph</label>
            <textarea name="paragraph" rows="5" class="w-full border p-2 rounded" placeholder="Deskripsi pengalaman kerja..." required></textarea>
        </div>
        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</div>
@endsection

