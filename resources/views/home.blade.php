<x-layout title="{{ $title }}">
    <div class="flex flex-col gap-8 items-center justify-center min-h-screen">
        <div>
            <svg class="w-56 h-56 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
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

        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="px-4 py-2 rounded-md shadow-md bg-red-500 text-white">Logout</button>
        </form>
    </div>
</x-layout>
