@extends('layouts.app')

@section('content')
<section class="py-10">
    <div class="container mx-auto max-w-lg">
        <h2 class="text-2xl font-bold mb-6">Edit Lokasi Google Maps</h2>

        <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block font-semibold mb-2">Embed URL Google Maps</label>
                <input type="text" name="maps_url" value="{{ $contact->maps_url }}" class="w-full border p-2 rounded" required>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">Update</button>
        </form>
    </div>
</section>
@endsection
