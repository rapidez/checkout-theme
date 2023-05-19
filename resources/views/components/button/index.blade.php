<component
    is="{{ $attributes->has('href', ':href', 'v-bind:href') ? 'a' : 'button' }}"
    {{ $attributes->class('text-base inline-block text-center pt-4 pb-4 px-6 rounded self-start') }}
>
    {{ $slot }}
</component>
