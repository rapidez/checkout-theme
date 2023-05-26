<button {{ $attributes->merge(['class' => 'underline text-inactive text-start']) }}>
    {{ $slot }}
</button>