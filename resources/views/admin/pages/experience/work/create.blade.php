@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-6">Tambah Timeline Pengalaman Kerja</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.experience.work.store') }}" method="POST" class="space-y-4">
        @csrf
        {{-- YEAR --}}
        <div>
            <label class="block font-semibold">Year</label>
            <input type="text" name="year" class="w-full border p-2 rounded" placeholder="2019 - Present" required>
        </div>
        {{-- WORK AT --}}
        <div>
            <label class="block font-semibold">Work At</label>
            <input type="text" name="work_at" class="w-full border p-2 rounded" placeholder="Nama Perusahaan" required>
        </div>
        {{-- AS --}}
        <div>
            <label class="block font-semibold">As</label>
            <input type="text" name="as" class="w-full border p-2 rounded" placeholder="Jabatan/Posisi" required>
        </div>
        {{-- PARAGRAPH --}}
        <div>
            <label class="block font-semibold">Paragraph</label>
            <textarea name="paragraph" rows="5" class="w-full border p-2 rounded" placeholder="Deskripsi pengalaman kerja..." required></textarea>
        </div>
        {{-- LIST --}}
        <div>
            <label class="block font-semibold mb-2">List Tugas/Pengalaman</label>
            <div id="list-container">
                <div class="flex items-center mb-2">
                    <input type="text" name="list[]" class="w-full border p-2 rounded mr-2" placeholder="Jika tidak ada list ,abaikan" >
                    <button type="button" onclick="removeListItem(this)" class="text-red-500">🗑️</button>
                </div>
            </div>
            <button type="button" onclick="addListItem()" class="mt-2 bg-green-600 text-white px-3 py-1 rounded">+ Tambah List</button>
        </div>
        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
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
        div.className = 'flex items-center mb-2';
        div.innerHTML = `
            <input type="text" name="list[]" class="w-full border p-2 rounded mr-2" placeholder="Kosongkan list jika tidak ada${listIndex}" required>
            <button type="button" onclick="removeListItem(this)" class="text-red-500">🗑️</button>
        `;
        container.appendChild(div);
    }

    function removeListItem(button) {
        button.parentElement.remove();
    }
</script>
@endpush
