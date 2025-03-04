<section class="space-y-6">
    <button data-modal-target="delete-post-modal" data-modal-toggle="delete-post-modal"
        class="px-4 py-2 text-sm text-white font-semibold rounded-lg shadow-md bg-red-500 hover:bg-red-600 transition">Delete</button>

    <x-modal id="delete-post-modal" message="Are you sure you want to delete this post?">
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')

            <button data-modal-hide="delete-post-modal" type="submit"
                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                Yes, I'm sure
            </button>
            <button data-modal-hide="delete-post-modal" type="button"
                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                cancel</button>
        </form>
    </x-modal>
</section>
