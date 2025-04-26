@extends('layouts.app')

@section('content')
<form action="{{ route('admin.about.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Tahun</label>
        <input type="text" name="year" class="mt-1 w-full border rounded px-3 py-2" required>
    </div>
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Universitas</label>
        <input type="text" name="institution" class="mt-1 w-full border rounded px-3 py-2" required>
    </div>
    <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700">Jurusan</label>
        <input type="text" name="major" class="mt-1 w-full border rounded px-3 py-2" required>
    </div>
    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Simpan</button>
</form>

@endsection
