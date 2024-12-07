<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-center">
            <h2 class="text-4xl font-semibold text-gray-800 dark:text-gray-200">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-blue-300 to-purple-300 p-8">
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-xl max-w-xl w-full p-10 text-center">
        <h3 class="text-3xl font-semibold text-gray-900 dark:text-white mb-6">
    {{ __("Welcome back, ") . Auth::user()->name }}!
</h3>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-8">
                {{ __("You're logged in!") }}
            </p>
            <div class="flex justify-center gap-8 mt-6">
                <a href="{{ route('students.index') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg text-xl font-medium hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 transition duration-300">
                    Manage Students
                </a>
                <a href="{{ route('profile.edit') }}" class="bg-teal-600 text-white px-8 py-3 rounded-lg text-xl font-medium hover:bg-teal-700 focus:ring-4 focus:ring-teal-200 transition duration-300">
                    Edit Profile
                </a>
            </div>
        </div>

        <footer class="mt-12 text-center text-gray-600 dark:text-gray-400">
            <p class="text-sm">&copy; 2024 Student Management System. All rights reserved.</p>
        </footer>
    </div>
</x-app-layout>
