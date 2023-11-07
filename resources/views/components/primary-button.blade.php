<button {{ $attributes->merge(['type' => 'submit', 'style' => 'background: #0d6efd;
    border: 0;
    border-radius: 50px;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;']) }}>
    {{ $slot }}
</button>

