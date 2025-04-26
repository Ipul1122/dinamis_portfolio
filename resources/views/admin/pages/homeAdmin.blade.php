@extends('layouts.app') {{-- Layout admin --}}
@section('content')
<div class="max-w-3xl mx-auto py-12 px-4">
    <h1 class="text-2xl font-bold text-gray-700 mb-6">Edit Home Section</h1>

    {{-- Notifikasi --}}
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                document.querySelector('.bg-green-100')?.remove();
            }, 3000);
        </script>
    @endif

    <form action="{{ route('admin.home.update') }}" method="POST" enctype="multipart/form-data" class="p-6 max-w-6xl mx-auto">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <!-- KIRI -->
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="nama" value="{{ $home->nama }}" class="w-full border rounded p-2">
                </div>
    
                <div>
                    <label class="block text-sm font-medium text-gray-700">Jurusan</label>
                    <input type="text" name="jurusan" value="{{ $home->jurusan }}" class="w-full border rounded p-2">
                </div>
    
                <div>
                    <label class="block text-sm font-medium text-gray-700">Paragraph</label>
                    <textarea name="paragraph" rows="5" class="w-full border rounded p-2">{{ $home->paragraph }}</textarea>
                </div>
            </div>
    
            <!-- KANAN -->
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" name="image" id="imageInput" class="w-full border rounded p-2">
                </div>
    
                <div>
                    <img id="previewImage" src="{{ asset('storage/' . $home->image) }}" alt="Preview" class="w-60 h-60 object-cover rounded-lg border shadow">
                </div>
            </div>
        </div>
    
        <div class="mt-6">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Update</button>
        </div>
    </form>
    
    <script>
        const imageInput = document.getElementById('imageInput');
        const previewImage = document.getElementById('previewImage');
    
        imageInput.addEventListener('change', function () {
            const [file] = this.files;
            if (file) {
                previewImage.src = URL.createObjectURL(file);
            }
        });
    </script>
    
@endsection
