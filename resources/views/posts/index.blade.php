<x-layout title="{{ $title }}">
    @if (session()->has('success'))
        <x-alert message="{{ session('success') }}"></x-alert>
    @endif

    <x-search-input></x-search-input>

    {{ $posts->links() }}

    <div class="my-4 py-4 px-4 mx-auto max-w-screen-xl lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $post)
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800"
                            style="background-color: {{ $post->category->color }};">
                            <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                        </span>
                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <a href="{{ route('posts.detail', $post->slug) }}" class="hover:underline">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $post->title }}</h2>
                    </a>
                    <p class="mb-5 font-light overflow-hidden text-gray-500 dark:text-gray-400">
                        {{ Str::limit($post->body, 100) }}
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="/posts?author={{ $post->author->username }}">
                            <div class="flex items-center space-x-3">
                                <img class="w-7 h-7 rounded-full"
                                    src="{{ asset('storage/images/' . $post->author->photo) }}"
                                    alt="{{ $post->author->name }}" />
                                <span class="font-medium text-sm dark:text-white">
                                    {{ $post->author->name }}
                                </span>
                            </div>
                        </a>
                        <a href="/posts/{{ $post->slug }}"
                            class="inline-flex items-center font-medium text-sm text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <div class="flex items-center justify-center w-full col-span-full mt-8">
                    <div>
                        <p class="font-semibold text-xl my-4 text-red-500">Article not found!</p>
                        <a href="/posts" class="block text-primary-600 hover:underline">&laquo; Back to all posts</a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    {{ $posts->links() }}

</x-layout>
