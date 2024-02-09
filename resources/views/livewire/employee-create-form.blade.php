<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Employee Creation Form') }}
    </h2>
</x-slot>

<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
@livewire('onboard.personal-details')
<x-section-border></x-section-border>
@livewire('onboard.employee-details')
    </div>
</div>
