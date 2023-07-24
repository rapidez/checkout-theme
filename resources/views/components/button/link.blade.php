@props(['tag'])
<x-tag
    is="{{ $tag ?? ($attributes->has('href') || $attributes->has('v-bind:href') ? 'a' : 'button') }}"
    {{ $attributes->merge(['class' => 'underline text-ct-inactive text-right']) }}
>
    {{ $slot }}
</x-tag>
