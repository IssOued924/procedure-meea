@props(['disabled' => false])

<input  {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-success  dark:border-gray-700  item-align-center   rounded-md']) !!}>
