<component
    is="{{ $attributes->has('href', ':href', 'v-bind:href') ? 'a' : 'button' }}"
    {{ $attributes->class('text-base inline-block text-center py-3.5 px-6 rounded self-start') }}
>
    {{ $slot }}
</component>
