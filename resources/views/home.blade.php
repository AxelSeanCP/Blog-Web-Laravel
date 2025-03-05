<x-layout title="{{ $title }}">
    <div class="flex flex-col gap-8 items-center justify-center min-h-screen">
        <div>
            <p class="text-xl">User yang login adalah</p>
            <p class="text-lg">Nama: {{ $user->name }}</p>
            <p class="text-lg">Username: {{ $user->username }}</p>
            <p class="text-lg">Email: {{ $user->email }}</p>

            @if (session()->has('success'))
                <x-alert message="{{ session('success') }}" type="success"></x-alert>
            @endif

            @error('photoError')
                <x-alert message="{{ $message }}" type="danger"></x-alert>
            @enderror

            @include('partials.add-photo')
        </div>

        <a href="{{ route('posts.create') }}">
            <button
                class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-blue-500 via-rose-500 to-yellow-400 group-hover:from-blue-500 group-hover:via-rose-500 group-hover:to-yellow-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
                    Write your own blog!
                </span>
            </button>
        </a>

        <form action="/logout" method="POST">
            @csrf
            <button type="submit"
                class="px-4 py-2 rounded-md shadow-md bg-red-500 text-white hover:bg-red-600">Logout</button>
        </form>
    </div>
</x-layout>
