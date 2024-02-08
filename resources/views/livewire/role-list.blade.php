<div class="dark:bg-gray-800 dark:text-white">
    {{-- Stop trying to control. --}}
    <div>
        <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search departments..." class="mb-4 m-3 p-2 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white">

        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-900">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white">Id</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white">Role Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white">Employees Count</th>


                    <!-- Add more table headers as needed -->
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                @foreach ($roles as $role)
                    <tr class="cursor-pointer hover:bg-gray-200 dark:hover:bg-gray-900">
                        <td class="px-6 py-4 whitespace-nowrap">{{$role->id}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $role->role_title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $role->users->count() }}</td>
                        <!-- Add more table cells as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4 m-3">
        </div>
    </div>
</div>
