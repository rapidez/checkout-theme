<component
    is="{{ $attributes->has('href', ':href', 'v-bind:href') ? 'a' : 'button' }}"
    {{ $attributes->class('bg-red-500 rounded p-3') }}
>
    {{ $slot }}
</component>
