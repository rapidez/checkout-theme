@props(['tag'])
<x-rapidez::tag
    is="{{ $tag ?? ($attributes->has('href') || $attributes->has('v-bind:href') ? 'a' : 'button') }}"
    {{ $attributes->merge(['class' => 'underline text-ct-inactive text-right disabled:no-underline disabled:cursor-not-allowed disabled:opacity-50']) }}
>
    {{ $slot }}
</x-rapidez::tag>
