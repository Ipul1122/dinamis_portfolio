@extends('layouts.app')

@section('content')
<section class="bg-white py-16">
    <div class="p-6 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- KIRI -->
            <div class="space-y-4">
                <h1 class="text-4xl font-bold text-gray-800">{{ $home->nama }}</h1>
                <h2 class="text-xl text-yellow-600 font-semibold">{{ $home->jurusan }}</h2>

                <!-- Paragraf dengan tombol Read More / Less -->
                <div class="text-gray-700 text-justify">
                    <p id="paragraph" class="overflow-hidden transition-all duration-300 ease-in-out">
                        {{ \Illuminate\Support\Str::words($home->paragraph, 30, '...') }}
                    </p>
                    @if(\Illuminate\Support\Str::wordCount($home->paragraph) > 30)
                        <button id="toggleParagraph" class="mt-2 text-sm text-blue-600 hover:underline focus:outline-none">
                            Read more
                        </button>
                    @endif
                </div>

                <!-- Tombol Tentang Saya -->
                <a href="{{ url('/about') }}" class="inline-block mt-4 px-5 py-2 bg-yellow-500 text-white rounded-lg shadow hover:bg-yellow-600 transition duration-300">
                    Tentang Saya
                </a>
            </div>

            <!-- KANAN -->
            <div class="flex justify-center md:justify-end">
                @if ($home->image)
                    <img src="{{ asset('storage/' . $home->image) }}" alt="Foto Profil" class="w-60 h-60 rounded-full object-cover shadow-lg border">
                @endif
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const fullText = @json($home->paragraph);
        const shortText = @json(\Illuminate\Support\Str::words($home->paragraph, 30, '...'));
        const paragraphEl = document.getElementById('paragraph');
        const toggleBtn = document.getElementById('toggleParagraph');

        if (toggleBtn) {
            let expanded = false;

            toggleBtn.addEventListener('click', () => {
                expanded = !expanded;
                paragraphEl.textContent = expanded ? fullText : shortText;
                toggleBtn.textContent = expanded ? 'Read less' : 'Read more';
            });
        }
    });
</script>
@endpush
