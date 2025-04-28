@extends('layouts.app')

@section('content')
<section class="py-10">
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Kelola Lokasi</h2>
            <a href="{{ route('admin.contact.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">Tambah Lokasi</a>
        </div>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid gap-6">
            @foreach($contacts as $contact)
                <div class="bg-white shadow rounded-lg p-4">
                    <iframe src="{{ $contact->maps_url }}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="mt-4 flex gap-4">
                        <a href="{{ route('admin.contact.edit', $contact->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white py-2 px-4 rounded">Edit</a>
                        <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Hapus lokasi ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
