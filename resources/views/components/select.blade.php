@props(['id', 'options', 'selected'])

<select {{ $attributes->merge(['class' => 'form-selectborder-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-500 dark:focus:border-red-600 focus:ring-red-500 dark:focus:ring-red-600 rounded-md shadow-sm']) }} id="{{ $id }}" wire:model="{{ $selected }}" required autocomplete="{{ $selected }}">
    @foreach ($options as $value => $label)
        <option value="{{ $value }}">{{ $label }}</option>
    @endforeach
</select>
