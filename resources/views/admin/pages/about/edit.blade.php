@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow rounded-lg mt-8">
    <h2 class="text-xl font-semibold mb-4">Edit Riwayat Pendidikan</h2>
    <form action="{{ route('admin.about.update', $educations->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Year</label>
            <input type="text" name="year" value="{{ $educations->year }}" class="mt-1 w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">institution</label>
            <input type="text" name="institution" value="{{ $educations->institution }}" class="mt-1 w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700">Major</label>
            <input type="text" name="major" value="{{ $educations->major }}" class="mt-1 w-full border rounded px-3 py-2" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
    </form>
</div>
@endsection
