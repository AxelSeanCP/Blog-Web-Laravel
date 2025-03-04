<x-auth-layout title="Login">
    <div class="relative min-h-screen flex items-center justify-center bg-gray-50 dark:bg-black">
        <img id="background" class="absolute -left-20 top-0 max-w-[877px] max-h-[700px] opacity-80"
            src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />

        <div class="w-full max-w-md bg-white/90 dark:bg-gray-900/90 rounded-md shadow-lg p-8 space-y-6 backdrop-blur-md">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                    Welcome to <span class="text-red-500">Blog Web Laravel</span>
                </h1>
                <p class="text-gray-700 dark:text-gray-400 mt-1">Please <span class="text-red-500">Login</span> to
                    continue</p>
            </div>

            <form action="/login" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Your Email
                    </label>
                    <input type="email" name="email" placeholder="Email"
                        class="w-full p-3 rounded-md bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500 focus:outline-none"
                        required>
                    @error('loginError')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Your Password
                    </label>
                    <input type="password" name="password" placeholder="Password"
                        class="w-full p-3 rounded-md bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-red-500 focus:outline-none"
                        required>
                    @error('loginError')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center mb-4">
                    <input id="remember" type="checkbox"
                        class="w-4 h-4 text-red-500 bg-gray-50 border-gray-300 rounded focus:ring-2 focus:ring-red-500">
                    <label for="remember" class="ml-2 text-sm text-gray-700 dark:text-gray-300">Remember me</label>
                </div>

                <button type="submit"
                    class="w-full bg-red-500 hover:bg-red-600 text-white font-medium py-3 rounded-md transition focus:outline-none focus:ring-2 focus:ring-red-500">
                    Login
                </button>
            </form>
        </div>
    </div>
</x-auth-layout>
