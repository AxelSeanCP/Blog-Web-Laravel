<x-layout title="{{ $title }}">
    <div class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900">
        <div class="w-full max-w-md bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-6">Add New Category</h2>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf

                <!-- Name Input -->
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                        Name</label>
                    <input type="text" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required placeholder="Enter category name">
                </div>

                <!-- Color Select -->
                <div class="mb-4">
                    <label for="color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                        Color</label>
                    <select id="color" name="color" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        {{-- use hex color for bg-color-100 --}}
                        <option value="#fee2e2" class="bg-red-600 text-white">Red</option>
                        <option value="#ffedd5" class="bg-orange-600 text-white">Orange</option>
                        <option value="#fef9c3" class="bg-yellow-600 text-white">Yellow</option>
                        <option value="#dcfce7" class="bg-green-600 text-white">Green</option>
                        <option value="#ccfbf1" class="bg-teal-600 text-white">Teal</option>
                        <option value="#dbeafe" class="bg-blue-600 text-white">Blue</option>
                        <option value="#e0e7ff" class="bg-indigo-600 text-white">Indigo</option>
                        <option value="#fce7f3" class="bg-pink-600 text-white">Pink</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit"
                        class="w-full bg-slate-800 hover:bg-slate-900 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-slate-500">
                        Add Category
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
