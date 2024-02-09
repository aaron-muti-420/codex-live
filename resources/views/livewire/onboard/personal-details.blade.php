
<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <x-form-section submit="updatePersonalDetails">
        <x-slot name="title">
            Personal Details
        </x-slot>

        <x-slot name="description">
            Please provide the future employees' personal details below.
        </x-slot>

        <x-slot name="form">
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="first_name" :value="__('First Name')" />
                    <x-input id="first_name" class="block w-full mt-1" type="text" name="first_name" :value="old('first_name')" required autofocus />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="last_name" :value="__('Last Name')" />
                    <x-input id="last_name" class="block w-full mt-1" type="text" name="last_name" :value="old('last_name')" required />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="date_of_birth" :value="__('Date of Birth')" />
                    <x-input id="date_of_birth" class="block w-full mt-1" type="date" name="date_of_birth" :value="old('date_of_birth')" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="gender" :value="__('Gender')" />
                    <x-input id="gender" class="block w-full mt-1" type="text" name="gender" :value="old('gender')" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="national_id" :value="__('National ID')" />
                    <x-input id="national_id" class="block w-full mt-1" type="text" name="national_id" :value="old('national_id')" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="phone_number" :value="__('Phone Number')" />
                    <x-input id="phone_number" class="block w-full mt-1" type="text" name="phone_number" :value="old('phone_number')" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="address" :value="__('Address')" />
                    <x-input id="address" class="block w-full mt-1" type="text" name="address" :value="old('address')" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="city" :value="__('City')" />
                    <x-input id="city" class="block w-full mt-1" type="text" name="city" :value="old('city')" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="marital_status" :value="__('Marital Status')" />
                    <x-input id="marital_status" class="block w-full mt-1" type="text" name="marital_status" :value="old('marital_status')" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="profile_photo_path" :value="__('Profile Photo')" />
                    <x-input id="profile_photo_path" class="block w-full mt-1" type="file" name="profile_photo_path" :value="old('profile_photo_path')" />
                </div>
        </x-slot>
        <x-slot name="actions">
            <x-action-message class="me-3" on="saved">
                {{ __('Saved.') }}
            </x-action-message>

            <x-button>
                {{ __('Save') }}
            </x-button>
        </x-slot>

    </x-form-section>
</div>
