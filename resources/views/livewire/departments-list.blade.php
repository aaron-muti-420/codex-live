<div class="dark:bg-gray-800 dark:text-white">
    {{-- Stop trying to control. --}}
    <div>
        <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search departments..." class="mb-4 m-3 p-2 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white">

        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-900">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white">Id</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white">Department Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white">Department Location</th>

                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white">Sections Count</th>

                    <!-- Add more table headers as needed -->
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                @foreach ($departments as $department)
                    <tr class="cursor-pointer hover:bg-gray-200" onclick="window.location.href = '{{ route('departments.show', $department->id) }}'">
                        <td class="px-6 py-4 whitespace-nowrap">{{$department->id}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $department->department_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $department->department_location }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $department->sections->count() }}</td>
                        <!-- Add more table cells as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4 m-3">
            {{ $departments->links() }}
        </div>
    </div>
</div>
