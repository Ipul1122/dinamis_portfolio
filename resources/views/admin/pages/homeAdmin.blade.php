@extends('layouts.admin.component') 
@section('content')
<div class="max-w-4xl mx-auto py-10 px-4 sm:px-6">
    <h1 class="text-3xl font-semibold text-gray-800 mb-8">Edit Home Section</h1>

    {{-- Notifikasi --}}
    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md shadow-sm flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                const notification = document.querySelector('.bg-green-100');
                if (notification) {
                    notification.classList.add('opacity-0', 'transition-opacity', 'duration-500');
                    setTimeout(() => notification.remove(), 500);
                }
            }, 3000);
        </script>
    @endif

    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <form action="{{ route('admin.home.update') }}" method="POST" enctype="multipart/form-data" class="p-6">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                        <input type="text" name="nama" value="{{ $home->nama }}" 
                            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                    </div>
        
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Jurusan</label>
                        <input type="text" name="jurusan" value="{{ $home->jurusan }}" 
                            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                    </div>
        
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Paragraph</label>
                        <textarea name="paragraph" rows="5" 
                            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">{{ $home->paragraph }}</textarea>
                    </div>
                </div>
        
                <!-- Right Column -->
                <div class="flex flex-col space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Gambar</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="imageInput" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500">PNG, JPG, or JPEG (MAX. 2MB)</p>
                                </div>
                                <input id="imageInput" type="file" name="image" class="hidden" />
                            </label>
                        </div>
                    </div>
        
                    <div>
                        <p class="text-sm font-medium text-gray-700 mb-2">Current Image</p>
                        <div class="relative w-full h-[52] overflow-hidden rounded-lg border border-gray-200">
                            <img id="previewImage" src="{{ asset('storage/' . $home->image) }}" alt="Preview" 
                                class="w-full h-full  object-fill">
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="mt-8 flex justify-end">
                <button type="submit" 
                    class="px-6 py-2.5 bg-blue-600 text-white font-medium rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const dropArea = document.querySelector('label[for="imageInput"]');
    const imageInput = document.getElementById('imageInput');
    const previewImage = document.getElementById('previewImage');

    // Prevent default behavior for drag & drop
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, (e) => {
            e.preventDefault();
            e.stopPropagation();
        });
    });

    // Optional: Add visual feedback
    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => {
            dropArea.classList.add('bg-gray-200');
        });
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => {
            dropArea.classList.remove('bg-gray-200');
        });
    });

    // Handle drop event
    dropArea.addEventListener('drop', (e) => {
        const dt = e.dataTransfer;
        const files = dt.files;

        if (files.length > 0 && files[0].type.startsWith('image/')) {
            imageInput.files = files; // Assign dropped files to input
            previewImage.src = URL.createObjectURL(files[0]);
        }
    });

    // Handle file input change event
    imageInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file && file.type.startsWith('image/')) {
            previewImage.src = URL.createObjectURL(file);
        }
    });
</script>

@endsection