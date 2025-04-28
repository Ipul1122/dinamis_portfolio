@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-6">Daftar Timeline Pengalaman Scient</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.experience.scient.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-6 inline-block hover:bg-blue-700">+ Tambah Data</a>

    <table class="table-auto w-full border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">Tahun</th>
                <th class="border px-4 py-2">Perusahaan</th>
                <th class="border px-4 py-2">Posisi</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($scients as $scient)
                <tr>
                    <td class="border px-4 py-2">{{ $scient->year }}</td>
                    <td class="border px-4 py-2">{{ $scient->title }}</td>
                    <td class="border px-4 py-2">{{ $scient->paragraph }}</td>
                    <td class="border px-4 py-2 space-x-2">
                        <a href="{{ route('admin.experience.scient.edit', $scient->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('admin.experience.scient.destroy', $scient->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-4 text-gray-500">Belum ada data pengalaman Scient.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
