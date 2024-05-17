@props(['value'])

<label style="float:left; color:rgb(10, 0, 0); margin-top:10px; margin-bottom:5px" {{ $attributes->merge(['class' => 'font-medium text-sm text-white-700 ']) }}>
    {{ $value ?? $slot }} <span style="color: red">*</span>
</label>
