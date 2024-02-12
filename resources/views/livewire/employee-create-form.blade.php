



    {{-- Care about people's approval and you will be their prisoner. --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employee Creation Form') }}
        </h2>
    </x-slot>

    <x-form-section submit="submit">
        <x-slot name="title">
            {{ $pages[$currentPage]['title'] }}
        </x-slot>

        <x-slot name="description">
            {{$pages[$currentPage]['description']}}
        </x-slot>

        <x-slot name="form">
            @if ($currentPage === 1)
            <div class="col-span-6 sm:col-span-4">
                <x-label for="first_name" :value="__('First Name')">First Name</x-label>
                <x-input id="first_name" class="block w-full mt-1" type="text" name="first_name" :value="old('first_name')" required autofocus  wire:model.lazy="first_name" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label for="last_name" :value="__('Last Name')">Last Name</x-label>
                <x-input id="last_name" class="block w-full mt-1" type="text" name="last_name" :value="old('last_name')" required  wire:model.lazy="last_name" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label for="date_of_birth" :value="__('Date of Birth')" >Date of Birth</x-label>
                <x-input id="date_of_birth" class="block w-full mt-1" type="date" name="date_of_birth" :value="old('date_of_birth')"  wire:model.lazy="date_of_birth" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label for="gender" :value="__('Gender')">Gender</x-label>
                <x-input id="gender" class="block w-full mt-1" type="text" name="gender" :value="old('gender')"  wire:model.lazy="gender" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label for="national_id" :value="__('National ID')">National ID Number</x-label>
                <x-input id="national_id" class="block w-full mt-1" type="text" name="national_id" :value="old('national_id')"  wire:model.lazy="national_id" />
            </div>
                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="phone_number" :value="__('Phone Number')">Phone Number</x-label>
                            <x-input id="phone_number" class="block w-full mt-1" type="text" name="phone_number" :value="old('phone_number')"  wire:model.lazy="phone_number" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="address" :value="__('Address')">Address</x-label>
                            <x-input id="address" class="block w-full mt-1" type="text" name="address" :value="old('address')"  wire:model.lazy="address" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="city" :value="__('City')">City</x-label>
                            <x-input id="city" class="block w-full mt-1" type="text" name="city" :value="old('city')"  wire:model.lazy="city" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="marital_status" :value="__('Marital Status')">Marital Status</x-label>
                            <select id="marital_status" class="block w-full mt-1 text-black block w-full mt-1 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-500 dark:focus:border-red-600 focus:ring-red-500 dark:focus:ring-red-600 rounded-md shadow-sm" name="marital_status" :value="old('marital_status')" wire:model.lazy="marital_status">
                                <option value="">Select Marital Status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="profile_photo_path" :value="__('Profile Photo')">Profile Photo</x-label>
                            <x-input id="profile_photo_path" class="block w-full mt-1" type="file" name="profile_photo_path" :value="old('profile_photo_path')"  wire:model.lazy="profile_photo_path" />
                        </div>
                        @elseif ($currentPage === 2 )
                        <div class="col-span-6 sm:col-span-4">


                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="supervisor_id" :value="__('Supervisor ID')">Supervisor</x-label>

                                <select id="supervisor_id" class="block w-full mt-1 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-500 dark:focus:border-red-600 focus:ring-red-500 dark:focus:ring-red-600 rounded-md shadow-sm" name="supervisor_id" :value="old('supervisor_id')" wire:model.lazy="supervisor_id">
                                    <option value="">Select Supervisor</option>
                                    @foreach ($supervisors as $supervisor)
                                        <option value="{{ $supervisor['id'] }}">{{ $supervisor['first_name']. ' ' . $supervisor['last_name'] }}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="supervisor_id" class="mt-2" />
                            </div>
                            <x-input-error for="supervisor_id" class="mt-2" />
                        </div>


                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="section_id" :value="__('Section ID')">Section ID</x-label>
                            <select id="section_id" class="block w-full mt-1 block w-full mt-1 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-500 dark:focus:border-red-600 focus:ring-red-500 dark:focus:ring-red-600 rounded-md shadow-sm" name="section_id" :value="old('section_id')" wire:model.lazy="section_id">
                                <option value="">Select Section</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section['id'] }}">{{ $section['section_name'] }}</option>
                                @endforeach
                            </select>
                            <x-input-error for="section_id" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="role_id" :value="__('Role')">Role</x-label>
                            <select id="role_id" class="block w-full mt-1 block w-full mt-1 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-500 dark:focus:border-red-600 focus:ring-red-500 dark:focus:ring-red-600 rounded-md shadow-sm" name="role_id" :value="old('role_id')" wire:model.lazy="role_id">
                                <option value="">Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role['id'] }}">{{ $role['role_title'] }}</option>
                                @endforeach
                            </select>
                            <x-input-error for="role_id" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="position" :value="__('Position')">Position</x-label>
                            <x-input id="position" type="text" class="mt-1 block w-full"   wire:model.lazy="position" />
                            <x-input-error for="position" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="tax_identification_number" :value="__('Tax Identification Number')">Tax Identification Number</x-label>
                            <x-input id="tax_identification_number" type="text" class="mt-1 block w-full"   wire:model.lazy="tax_identification_number" />
                            <x-input-error for="tax_identification_number" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="social_security_number" :value="__('Social Security Number')">Social Security Number</x-label>
                            <x-input id="social_security_number" type="text" class="mt-1 block w-full"   wire:model.lazy="social_security_number" />
                            <x-input-error for="social_security_number" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="bank_account_number" :value="__('Bank Account Number')">Bank Account Number</x-label>
                            <x-input id="bank_account_number" type="text" class="mt-1 block w-full"   wire:model.lazy="bank_account_number" />
                            <x-input-error for="bank_account_number" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="bank_name" :value="__('Bank Name')">Bank Name</x-label>
                            <x-input id="bank_name" type="text" class="mt-1 block w-full"   wire:model.lazy="bank_name" />
                            <x-input-error for="bank_name" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="bank_branch" :value="__('Bank Branch')">Bank Branch</x-label>
                            <x-input id="bank_branch" type="text" class="mt-1 block w-full"   wire:model.lazy="bank_branch" />
                            <x-input-error for="bank_branch" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="salary_scale" :value="__('Salary Scale')">Salary Scale</x-label>
                            <x-input id="salary_scale" type="text" class="mt-1 block w-full"   wire:model.lazy="salary_scale" />
                            <x-input-error for="salary_scale" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="basic_salary" :value="__('Basic Salary')">Basic Salary</x-label>
                            <x-input id="basic_salary" type="text" class="mt-1 block w-full"   wire:model.lazy="basic_salary" />
                            <x-input-error for="basic_salary" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="housing_allowance" :value="__('Housing Allowance')">Housing Allowance</x-label>
                            <x-input id="housing_allowance" type="text" class="mt-1 block w-full"   wire:model.lazy="housing_allowance" />
                            <x-input-error for="housing_allowance" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="transport_allowance" :value="__('Transport Allowance')">Transport Allowance</x-label>
                            <x-input id="transport_allowance" type="text" class="mt-1 block w-full"   wire:model.lazy="transport_allowance" />
                            <x-input-error for="transport_allowance" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="other_allowance" :value="__('Other Allowance')">Other Allowance</x-label>
                            <x-input id="other_allowance" type="text" class="mt-1 block w-full"   wire:model.lazy="other_allowance" />
                            <x-input-error for="other_allowance" class="mt-2" />
                        </div>


                        @endif



                    </x-slot>
                    <x-slot name="actions">


                        @if ($currentPage === 1)

                        @else
                        <x-secondary-button wire:click='previousPage'>
                            {{ __('Previous') }}
                        </x-button>
                        @endif

                        @if($currentPage === count($pages))
                        <x-button wire:click='submit'>
                            {{ __('Register Employee') }}
                        </x-button>
                        @else
                        <x-secondary-button wire:click='nextPage'>
                            {{ __('Next') }}
                        </x-button>

                        @endif
                    </x-slot>

                </x-form-section>
