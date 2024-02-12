<div class="dark:bg-gray-800 dark:text-white">
    {{-- Stop trying to control. --}}
    <div>
        <div class="flex items-center justify-between">
            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search departments..." class="mb-4 m-3 p-2 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white">
            <div class="m-5">
                <x-secondary-button wire:click="addRole" wire:loading.attr="disabled">
                    {{ __('Add Role') }}
                </x-secondary-button>
            </div>
        </div>

        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-900">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white">Id</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white">Role Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white">Employees Count</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-white">Delete Role</th>
                    <!-- Add more table headers as needed -->
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                @foreach ($roles as $role)
                    <tr class="">
                        <td class="px-6 py-4 whitespace-nowrap">{{$role->id}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $role->role_title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $role->users_count }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <x-danger-button wire:click="confirmRoleRemoval({{ $role->id }})" wire:loading.attr="disabled">
                                {{ __('X') }}
                            </x-danger-button>
                        <!-- Add more table cells as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!--Adding role to system -->
        <x-dialog-modal wire:model.live="confirmingAddRole">
            <x-slot name="title">
                {{ __('New Role') }}
            </x-slot>

            <x-slot name="content">
                <div class="mt-4" x-data="{}" x-on:confirming-add-role.window="setTimeout(() => $refs.role_title.focus(), 250)">
                    <x-input type="text" class="mt-1 block w-3/4"
                                placeholder="{{ __('Role Title') }}"
                                x-ref="role_title"
                                wire:model="role_title"
                                wire:keydown.enter="addRoleToDb" />
                    <x-input-error for="role_title" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingAddRole')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3" wire:click="addRoleToDb" wire:loading.attr="disabled">
                    {{ __('Submit') }}
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>

        <!-- Delete Role Confirmation Modal -->
        <x-dialog-modal wire:model.live="confirmingRoleRemoval">
            <x-slot name="title">
                {{ __('Delete Role') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete the role?' )}}
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingRoleRemoval')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="mx-2" wire:click="deleteRole({{ $role->id }})">Delete</x-danger-button>
            </x-slot>
        </x-dialog-modal>

    </div>
</div>
