@props(['value'])

<label style="float:left; color:rgb(10, 0, 0)" {{ $attributes->merge(['class' => '  font-medium text-sm text-white-700 ']) }}>
    {{ $value ?? $slot }}
</label>
