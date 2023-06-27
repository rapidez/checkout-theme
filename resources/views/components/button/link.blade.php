<component
    is="{{ $component ?? ($attributes->has('href') || $attributes->has('v-bind:href') ? 'a' : 'button') }}"
    {{ $attributes->merge(['class' => 'underline text-ct-inactive text-right']) }}
>
    {{ $slot }}
</component>