<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-blue-100 to-teal-100 p-6">
        <div class="bg-white p-8 rounded-lg shadow-xl max-w-xl w-full text-center">
            <h1 class="text-3xl font-semibold text-gray-900 dark:text-black mb-4">
                Welcome to the Student Management System
            </h1>
            <p class="text-lg text-black-700 dark:text-black-300 mb-6">
                An intuitive platform to manage and track student progress. Whether you're a student, teacher, or admin, your tools are just a click away!
            </p>
            <div class="mt-6 space-y-4">
                @if (Route::has('login'))
                    <nav class="flex justify-center gap-6">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="bg-blue-600 text-white px-6 py-2 rounded-md text-lg font-medium hover:bg-blue-700 transition">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="bg-green-600 text-white px-6 py-2 rounded-md text-lg font-medium hover:bg-green-700 transition">
                                Log In
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-teal-600 text-white px-6 py-2 rounded-md text-lg font-medium hover:bg-teal-700 transition">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
        <footer class="mt-8 text-center text-gray-600 dark:text-gray-400">
            <p class="text-sm">&copy; 2024 Student Management System. All rights reserved.</p>
        </footer>
    </div>
</x-guest-layout>