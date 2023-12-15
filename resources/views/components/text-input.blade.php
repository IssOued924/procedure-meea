@props(['disabled' => false])

{{-- <input  {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-success   item-align-center   rounded-md']) !!}> --}}
<input style="margin-top: 0 !important;     margin-inline: auto;  width:50%; height:20%; padding-top: 2px !important; padding-bottom: 1px !important;" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-success border-gray-300  dark:border-gray-700     rounded-md']) !!}>

