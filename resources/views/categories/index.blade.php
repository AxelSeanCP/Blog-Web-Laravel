<x-layout title="{{ $title }}">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-2">
        @foreach ($categories as $category)
            <div class="w-full p-4 bg-white rounded-lg shadow-md">
                <p>{{ $category->name }}</p>
                <p>{{ $category->color }}</p>
                <p>{{ $category->slug }}</p>
            </div>
        @endforeach
        <a href="{{ route('categories.create') }}"
            class="w-full p-4 bg-white rounded-lg shadow-md flex items-center justify-center gap-3 hover:bg-slate-200 cursor-pointer">
            <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 12h14m-7 7V5" />
            </svg>
            <p class="text-2xl font-semibold">Add Category</p>
        </a>
    </div>
</x-layout>
