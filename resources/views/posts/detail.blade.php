<x-layout title="{{ $title }}">
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-xs text-primary-600 hover:underline">&laquo; Back to all
                        posts</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="{{ asset('img/tenochtitlan.png') }}"
                                alt="{{ $post->author->name }}">
                            <div>
                                <a href="/posts?author={{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400 mb-1">
                                    {{ $post->created_at->diffForHumans() }}</p>
                                <span
                                    class="text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800"
                                    style="background-color: {{ $post->category->color }};">
                                    <a
                                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                                </span>
                            </div>
                        </div>
                    </address>

                    @if ($post->author->id === auth()->user()->id)
                        <div class="flex items-center gap-3 my-4">
                            <a href="{{ route('posts.edit', $post) }}"
                                class="px-4 py-2 text-sm text-white font-semibold rounded-lg shadow-md bg-primary-700 hover:bg-primary-800 transition">Edit</a>
                            @include('posts.partials.delete-post')
                        </div>
                    @endif

                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                </header>
                <p>{{ $post->body }}</p>
            </article>
        </div>
    </main>

</x-layout>
