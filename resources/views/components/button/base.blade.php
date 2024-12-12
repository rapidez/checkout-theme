@props(['loader' => false, 'tag'])

@php
    $tag = $attributes->hasAny('href', ':href', 'v-bind:href') ? 'a' : 'button';
    $tag = $attributes->has('for') ? 'label' : $tag;
@endphp

<x-rapidez::tag
    :is="$tag"
    v-bind:disabled="$root.loading"
>
    @if($loader)
        <div class="absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2" v-cloak>
            <x-heroicon-o-arrow-path class="size-5 animate-spin" />
        </div>
    @endif
    <span class="contents" @attributes([':class' => $loader ? '{ "invisible": $root.loading }' : false])>
        {{ $slot }}
    </span>
</x-rapidez::tag>
