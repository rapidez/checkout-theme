@props(['tag' => 'p'])
@php
    $isAnchor = $attributes->has('href', ':href', 'v-bind:href');
    $tag = $isAnchor ? 'a' : $tag;
@endphp
<component
    is="{{ $tag }}"
    {{ $attributes->class('font-medium relative') }}
>
    @if ($isAnchor)
        <x-heroicon-o-arrow-left class="absolute left-0 pr-6 top-1/2 h-4 -translate-x-full -translate-y-1/2" />
    @endif
    {{ $slot }}
</component>
