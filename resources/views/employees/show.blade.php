<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 container mx-auto px-4 py-8 dark:bg-gray-900 dark:text-white">
        <nav class="text-sm mb-4">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/" class="text-blue-500 hover:text-blue-700">Home</a>
                    <svg class="h-5 w-auto text-gray-400 mx-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 0 1 0-1.414l4-4a1 1 0 0 1 1.414 0l4 4a1 1 0 0 1-1.414 1.414L11 4.414V15a1 1 0 1 1-2 0V4.414L5.707 7.707a1 1 0 0 1-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <a href="/employees" class="text-blue-500 hover:text-blue-700">Employees</a>
                    <svg class="h-5 w-auto text-gray-400 mx-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 0 1 0-1.414l4-4a1 1 0 0 1 1.414 0l4 4a1 1 0 0 1-1.414 1.414L11 4.414V15a1 1 0 1 1-2 0V4.414L5.707 7.707a1 1 0 0 1-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <span class="text-gray-500">Profile</span>
                </li>
            </ol>
        </nav>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-semibold mb-4">Employee Profile</h1>
            <div class="flex items-center m-4 ">
                @if ($user->profile_photo_path)
                    <img src="{{ $user->profile_photo_path }}" alt="User Avatar" class="w-16 h-16 rounded-full mr-4">
                @else
                    <div class="w-16 h-16 rounded-full text-white flex items-center justify-center mr-4" style="background-color: {{ sprintf('#%06X', mt_rand(0, 0xFFFFFF)) }}">
                        <span class="text-lg font-semibold">{{ substr($user->first_name, 0, 1) }}{{ substr($user->last_name, 0, 1) }}</span>
                    </div>
                @endif
                <div class="ml-4">
                    <h2 class="text-lg font-semibold">{{ $user->first_name }} {{ $user->last_name}}</h2>

                    <p class="text-gray-500">{{ $user->email }}</p>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-semibold mt-6">Personal Information</h3>
            </div>
        </div>
    </div>
</x-app-layout>
