<component
    is="{{ $component ?? ($attributes->has('href') || $attributes->has('v-bind:href') ? 'a' : 'button') }}"
    {{ $attributes->class('inline-block self-start rounded py-4 px-6 text-center text-sm transition disabled:cursor-not-allowed disabled:opacity-70') }}
    v-bind:disabled="$root.loading"
>
    {{ $slot }}
</component>
