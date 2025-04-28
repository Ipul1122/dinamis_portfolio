@extends('layouts.app') 
@section('content')
<div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="rounded-lg bg-white p-6 shadow-md dark:bg-gray-800">

        <h1 class="mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            Edit Scient Experience
        </h1>

        <form action="{{ route('admin.experience.scient.update', $scients->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Year Input --}}
            <div class="mb-5">
                <label for="year" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Year</label>
                <input type="text" name="year" id="year"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    value="{{ old('year', $scients->year) }}"
                    placeholder="e.g., 2020 - 2022 or 2023 - Present"
                    required>
                @error('year')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Title Input --}}
            <div class="mb-5">
                <label for="scient_at" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" name="title" id="title"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    value="{{ old('title', $scients->title) }}"
                    placeholder="Company Name"
                    required>
                @error('title')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            

            {{-- Paragraph Textarea --}}
            <div class="mb-5">
                <label for="paragraph" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea name="paragraph" id="paragraph" rows="4"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Describe your role and responsibilities..."
                        required>{{ old('paragraph', $scients->paragraph) }}</textarea>
                @error('paragraph')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

           

            {{-- Action Buttons --}}
            <div class="flex items-center justify-end space-x-3">
                <a href="{{ route('admin.experience.scient.index') }}" class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:z-10 focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                    Cancel
                </a>
                <button type="submit" class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Update Experience
                </button>
            </div>

        </form>
    </div>
</div>
@endsection


