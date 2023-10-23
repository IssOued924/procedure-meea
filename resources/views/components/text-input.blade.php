@props(['disabled' => false])

<input style="margin-top: 0 !important;     margin-inline: auto;  width:60%; padding-top: 2px !important; padding-bottom: 2px !important;" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300  dark:border-gray-700  item-align-center      rounded-md']) !!}>
