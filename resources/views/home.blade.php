<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Ini adalah Halaman Home Page</h3>

    <p>User yang login adalah</p>
    <p>Nama: {{ $user->name }}</p>
    <p>Username: {{ $user->username }}</p>
    <p>Email: {{ $user->email }}</p>

    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="px-4 py-2 rounded-md shadow-md bg-red-500 text-white">Logout</button>
    </form>
</x-layout>
