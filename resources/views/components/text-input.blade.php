@props(['disabled' => false])

<input  {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300  dark:border-gray-700  item-align-center       rounded-md']) !!}>
