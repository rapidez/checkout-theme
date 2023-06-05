<component
    is="{{ $component ?? ($attributes->has('href', ':href', 'v-bind:href') ? 'a' : 'button') }}"
    {{ $attributes->class('text-base inline-block text-center py-4 px-6 rounded self-start') }}
>
    {{ $slot }}
</component>
