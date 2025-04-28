@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-10">Hubungi Kami</h2>

        @if($contact)
            <div class="mb-10">
                <iframe src="{{ $contact->maps_url }}" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg p-8 max-w-2xl mx-auto">
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label class="block mb-2 font-semibold">Nama</label>
                    <input type="text" name="nama" class="w-full border p-3 rounded" placeholder="Masukkan Nama Anda" required>
                </div>
                <div>
                    <label class="block mb-2 font-semibold">No. Telpon</label>
                    <input type="text" name="no_telpon" class="w-full border p-3 rounded" placeholder="Masukkan No. Telpon" required>
                </div>
                <div>
                    <label class="block mb-2 font-semibold">Kerja Sama?</label>
                    <input type="text" name="kerja_sama" class="w-full border p-3 rounded" placeholder="Masukkan pesan..." required>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
