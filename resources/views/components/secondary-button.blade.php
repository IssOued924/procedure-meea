<button {{ $attributes->merge(['type' => 'button', 'style' => 'background: red;
    border: 0;
    border-radius: 50px;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;']) }}>
    {{ $slot }}
</button>
