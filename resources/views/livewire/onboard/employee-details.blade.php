<x-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Employee Staff Details') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Here you enter the required staff details.') }}
    </x-slot>

    <x-slot name="form">


        <div class="col-span-6 sm:col-span-4">
            <x-label for="supervisor_id" value="{{ __('Supervisor ID') }}" />
            <x-input id="supervisor_id" type="text" class="mt-1 block w-full" wire:model="state.supervisor_id" />
            <x-input-error for="supervisor_id" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="salary_reference_number" value="{{ __('Salary Reference Number') }}" />
            <x-input id="salary_reference_number" type="text" class="mt-1 block w-full" wire:model="state.salary_reference_number" />
            <x-input-error for="salary_reference_number" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="section_id" value="{{ __('Section ID') }}" />
            <x-input id="section_id" type="text" class="mt-1 block w-full" wire:model="state.section_id" />
            <x-input-error for="section_id" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="years_of_service" value="{{ __('Years of Service') }}" />
            <x-input id="years_of_service" type="number" class="mt-1 block w-full" wire:model="state.years_of_service" />
            <x-input-error for="years_of_service" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_team_id" value="{{ __('Current Team ID') }}" />
            <x-input id="current_team_id" type="text" class="mt-1 block w-full" wire:model="state.current_team_id" />
            <x-input-error for="current_team_id" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="role_id" value="{{ __('Role ID') }}" />
            <x-input id="role_id" type="text" class="mt-1 block w-full" wire:model="state.role_id" />
            <x-input-error for="role_id" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="position" value="{{ __('Position') }}" />
            <x-input id="position" type="text" class="mt-1 block w-full" wire:model="state.position" />
            <x-input-error for="position" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="tax_identification_number" value="{{ __('Tax Identification Number') }}" />
            <x-input id="tax_identification_number" type="text" class="mt-1 block w-full" wire:model="state.tax_identification_number" />
            <x-input-error for="tax_identification_number" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="social_security_number" value="{{ __('Social Security Number') }}" />
            <x-input id="social_security_number" type="text" class="mt-1 block w-full" wire:model="state.social_security_number" />
            <x-input-error for="social_security_number" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="bank_account_number" value="{{ __('Bank Account Number') }}" />
            <x-input id="bank_account_number" type="text" class="mt-1 block w-full" wire:model="state.bank_account_number" />
            <x-input-error for="bank_account_number" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="bank_name" value="{{ __('Bank Name') }}" />
            <x-input id="bank_name" type="text" class="mt-1 block w-full" wire:model="state.bank_name" />
            <x-input-error for="bank_name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="bank_branch" value="{{ __('Bank Branch') }}" />
            <x-input id="bank_branch" type="text" class="mt-1 block w-full" wire:model="state.bank_branch" />
            <x-input-error for="bank_branch" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="salary_scale" value="{{ __('Salary Scale') }}" />
            <x-input id="salary_scale" type="text" class="mt-1 block w-full" wire:model="state.salary_scale" />
            <x-input-error for="salary_scale" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="basic_salary" value="{{ __('Basic Salary') }}" />
            <x-input id="basic_salary" type="text" class="mt-1 block w-full" wire:model="state.basic_salary" />
            <x-input-error for="basic_salary" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="housing_allowance" value="{{ __('Housing Allowance') }}" />
            <x-input id="housing_allowance" type="text" class="mt-1 block w-full" wire:model="state.housing_allowance" />
            <x-input-error for="housing_allowance" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="transport_allowance" value="{{ __('Transport Allowance') }}" />
            <x-input id="transport_allowance" type="text" class="mt-1 block w-full" wire:model="state.transport_allowance" />
            <x-input-error for="transport_allowance" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="other_allowance" value="{{ __('Other Allowance') }}" />
            <x-input id="other_allowance" type="text" class="mt-1 block w-full" wire:model="state.other_allowance" />
            <x-input-error for="other_allowance" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="total_salary" value="{{ __('Total Salary') }}" />
            <x-input id="total_salary" type="text" class="mt-1 block w-full" wire:model="state.total_salary" />
            <x-input-error for="total_salary" class="mt-2" />
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
