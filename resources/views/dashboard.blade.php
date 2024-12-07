<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-center">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-blue-100 to-teal-100 p-6">
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg max-w-xl w-full p-8 text-center">
            <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
                {{ __("Welcome back!") }}
            </h3>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-6">
                {{ __("You're logged in!") }}
            </p>
            <div class="flex justify-center gap-6">
                <a href="{{ route('students.index') }}" class="bg-blue-600 text-white px-6 py-2 rounded-md text-lg font-medium hover:bg-blue-700 transition">
                    Manage Students
                </a>
                <a href="{{ route('profile.edit') }}" class="bg-teal-600 text-white px-6 py-2 rounded-md text-lg font-medium hover:bg-teal-700 transition">
                    Edit Profile
                </a>
            </div>
        </div>
        <footer class="mt-8 text-center text-gray-600 dark:text-gray-400">
            <p class="text-sm">&copy; 2024 Student Management System. All rights reserved.</p>
        </footer>
    </div>
</x-app-layout>