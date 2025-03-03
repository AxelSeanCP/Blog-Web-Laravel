<x-layout title="{{ $title }}">
    <main class="py-12 px-4 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-center">
            <form method="POST" action="{{ route('posts.store') }}" class="w-full max-w-4xl">
                @csrf

                <input type="hidden" name="author_id" value="{{ auth()->user()->id }}" />

                <input type="text" name="title" placeholder="Enter title..."
                    class="w-full mb-6 border-none text-4xl font-bold text-gray-900 dark:text-white bg-transparent focus:outline-none placeholder-gray-400 dark:placeholder-gray-600"
                    required />

                <textarea name="body" id="body" rows="12" placeholder="Start writing here..." required
                    class="w-full text-lg border-none leading-relaxed text-gray-800 dark:text-gray-300 bg-transparent focus:outline-none placeholder-gray-400 dark:placeholder-gray-600 resize-none"></textarea>

                <label for="category_id" class="sr-only"></label>
                <select id="category_id" name="category_id" required
                    class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer mb-6">
                    <option value="" selected>Choose a category</option>
                    @if ($categories->count())
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    @else
                        <option value="" disabled>No categories available</option>
                    @endif
                </select>

                <button type="submit"
                    class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-slate-600 dark:hover:bg-slate-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </main>
</x-layout>
