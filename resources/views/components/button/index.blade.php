<component
    is="{{ $component ?? ($attributes->has('href') || $attributes->has('v-bind:href') ? 'a' : 'button') }}"
    {{ $attributes->class('text-sm inline-block text-center py-4 px-6 rounded self-start') }}
>
    {{ $slot }}
</component>
