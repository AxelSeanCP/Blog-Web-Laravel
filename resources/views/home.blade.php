<x-layout title="{{ $title }}">
    <div class="flex flex-col gap-8 items-center justify-center min-h-screen">
        <div>
            <svg class="w-56 h-56 text-blue-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                    clip-rule="evenodd" />
            </svg>

            <p class="text-xl">User yang login adalah</p>
            <p class="text-lg">Nama: {{ $user->name }}</p>
            <p class="text-lg">Username: {{ $user->username }}</p>
            <p class="text-lg">Email: {{ $user->email }}</p>
        </div>

        <a href="{{ route('posts.create') }}">
            <button
                class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
                    Write your own blog!
                </span>
            </button>
        </a>

        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="px-4 py-2 rounded-md shadow-md bg-red-500 text-white">Logout</button>
        </form>
    </div>
</x-layout>
