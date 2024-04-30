<button {{ $attributes->merge(['type' => 'submit', 'style' => 'background: #0d6efd;
    border: 0;
    margin-top: 0px;
    border-radius: 50px;
    
    color: #fff;
    transition: 0.4s;']) }}>
    {{ $slot }}
</button>

