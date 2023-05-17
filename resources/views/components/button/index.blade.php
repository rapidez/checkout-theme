<component
    is="{{ $attributes->has('href', ':href', 'v-bind:href') ? 'a' : 'button' }}"
    {{ $attributes->class('text-[15px] inline-block text-center pt-4 pb-4 px-4 rounded self-start') }}
>
    {{ $slot }}
</component>
