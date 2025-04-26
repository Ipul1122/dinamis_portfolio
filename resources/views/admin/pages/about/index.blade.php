@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-4">About Education Timeline</h1>

    {{-- Tampilkan pesan sukses jika ada --}}
    @if (session('success'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tombol untuk menambahkan data --}}
    <a href="{{ route('admin.about.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded">Tambah Data</a>

    <table class="table-auto w-full mt-6">
        <thead class="bg-gray-200">
            <tr>
                <th class="border px-4 py-2">Tahun</th>
                <th class="border px-4 py-2">Institusi</th>
                <th class="border px-4 py-2">Jurusan</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($educations as $edu)
                <tr>
                    <td class="border px-4 py-2">{{ $edu->year }}</td>
                    <td class="border px-4 py-2">{{ $edu->institution }}</td>
                    <td class="border px-4 py-2">{{ $edu->major}}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.about.edit', $edu->id) }}" class="text-yellow-500">Edit</a> |
                        <form action="{{ route('admin.about.destroy', $edu->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</div>
@endsection
