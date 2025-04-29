@extends('layouts.app') {{-- Ganti sesuai layout admin --}}
@section('title', 'Pesan Masuk')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Pesan Masuk</h2>

    <table class="w-full table-auto border-collapse border">
        <thead class="bg-gray-200">
            <tr>
                <th class="border px-4 py-2">No</th>
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">No. Telp</th>
                <th class="border px-4 py-2">Kerja Sama</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $i => $contact)
                <tr>
                    <td class="border px-4 py-2">{{ $i + 1 }}</td>
                    <td class="border px-4 py-2">{{ $contact->nama }}</td>
                    <td class="border px-4 py-2">{{ $contact->telp }}</td>
                    <td class="border px-4 py-2">{{ $contact->kerjasama }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-4">Belum ada pesan masuk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
