@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-3xl">
    <h1 class="text-3xl font-bold mb-8 text-gray-800 border-b pb-3">Tambah Timeline Pengalaman Kerja</h1>

    @if ($errors->any())
        <div class="bg-red-50 text-red-600 p-4 mb-6 rounded-lg border border-red-200 shadow-sm">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.experience.work.store') }}" method="POST" class="space-y-6">
        @csrf
        {{-- YEAR --}}
        <div class="form-group">
            <label class="block font-medium text-gray-700 mb-2">Tahun</label>
            <input type="text" name="year" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" placeholder="2019 - Present" required>
        </div>
        
        {{-- WORK AT --}}
        <div class="form-group">
            <label class="block font-medium text-gray-700 mb-2">Tempat Kerja</label>
            <input type="text" name="work_at" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" placeholder="Nama Perusahaan" required>
        </div>
        
        {{-- AS --}}
        <div class="form-group">
            <label class="block font-medium text-gray-700 mb-2">Posisi</label>
            <input type="text" name="as" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" placeholder="Jabatan/Posisi" required>
        </div>
        
        {{-- PARAGRAPH --}}
        <div class="form-group">
            <label class="block font-medium text-gray-700 mb-2">Deskripsi</label>
            <textarea name="paragraph" rows="5" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" {{ old('paragraph', $data->paragraph ?? '') }} placeholder="Deskripsi pengalaman kerja..." ></textarea>
        </div>
        
        {{-- LIST --}}
        <div class="form-group">
            <label class="block font-medium text-gray-700 mb-2">List Tugas/Pengalaman</label>
            <div id="list-container" class="space-y-3">
                <div class="flex items-center">
                    <input type="text" name="list[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" placeholder="Jika tidak ada list, abaikan">
                    <button type="button" onclick="removeListItem(this)" class="ml-2 p-2 text-gray-500 hover:text-red-500 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </div>
            </div>
            <button type="button" onclick="addListItem()" class="mt-3 flex items-center text-sm font-medium text-blue-600 hover:text-blue-800 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Tambah List
            </button>
        </div>
        
        <div class="mt-8">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg transition-colors duration-300 shadow-sm flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    let listIndex = 1;
    
    function addListItem() {
        listIndex++;
        const container = document.getElementById('list-container');
        const div = document.createElement('div');
        div.className = 'flex items-center';
        div.innerHTML = `
            <input type="text" name="list[]" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" placeholder="Tugas/pengalaman #${listIndex}" required>
            <button type="button" onclick="removeListItem(this)" class="ml-2 p-2 text-gray-500 hover:text-red-500 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </button>
        `;
        container.appendChild(div);
    }

    function removeListItem(button) {
        button.parentElement.remove();
    }
</script>
@endpush