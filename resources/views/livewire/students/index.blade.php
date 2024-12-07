<div class="bg-gradient-to-r from-blue-500 via-purple-600 to-pink-500 min-h-screen">
    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-between p-4 items-center">
                <div>
                    <h1 class="text-3xl font-bold text-white">Students</h1>
                    <p class="text-sm text-gray-100">A comprehensive list of all students in the system.</p>
                </div>
                <div>
                    <a href="{{ route('students.create') }}" wire:navigate 
                       class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-indigo-600 rounded-xl shadow-md gap-x-3 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200">
                        Add Student
                    </a>
                </div>
            </div>

            <div class="overflow-hidden rounded-xl mt-8">
                <!-- Gradient background added here for the student table -->
                <div class="bg-gradient-to-tl from-indigo-100 via-purple-50 to-pink-50 shadow-lg rounded-xl">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="overflow-x-auto rounded-lg">
                            <table class="min-w-full divide-y divide-blue-200 dark:divide-neutral-700">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-600 uppercase text-start dark:text-neutral-500">ID</th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-600 uppercase text-start dark:text-neutral-500">Name</th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-600 uppercase text-start dark:text-neutral-500">Email</th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-600 uppercase text-start dark:text-neutral-500">Class</th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-600 uppercase text-start dark:text-neutral-500">Section</th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-600 uppercase text-end dark:text-neutral-500">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                        <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-200 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-600">
                                            <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $student->id }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $student->name }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $student->email }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $student->class->name }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $student->section->name }}</td>
                                            <td class="px-6 py-4 text-sm font-medium text-end">
                                                <button type="button" class="inline-flex items-center text-sm font-semibold text-red-600 border border-transparent rounded-lg gap-x-2 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 dark:text-red-500 dark:hover:text-red-400">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="my-6">
                            {{ $students->links(data: ['scrollTo' => false]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
