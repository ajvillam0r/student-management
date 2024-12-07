<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-blue-100 to-purple-100 p-6">
        <div class="bg-white p-10 rounded-lg shadow-xl max-w-lg w-full text-center">
            <h1 class="text-4xl font-semibold text-gray-900 dark:text-gray-800 mb-6">
                Welcome to the Student Management System
            </h1>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-8">
                Manage and track student progress easily. Whether you're a student, teacher, or admin, everything is just a click away!
            </p>
            
            @if (Route::has('login'))
                <nav class="space-y-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="block bg-blue-600 text-white px-6 py-3 rounded-md text-xl font-medium hover:bg-blue-700 transition">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="block bg-green-600 text-white px-6 py-3 rounded-md text-xl font-medium hover:bg-green-700 transition">
                            Log In
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="block bg-teal-600 text-white px-6 py-3 rounded-md text-xl font-medium hover:bg-teal-700 transition">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>

        <footer class="mt-12 text-center text-gray-600 dark:text-gray-400">
            <p class="text-sm">&copy; 2024 Student Management System. All rights reserved.</p>
        </footer>
    </div>
</x-guest-layout>
