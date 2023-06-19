@props(['tag' => 'p'])
@php
    $isAnchor = count(
        $attributes
            ->only('href', ':href', 'v-bind:href')
            ->filter(fn($value) => isset($value))
            ->getAttributes(),
    );
    $tag = $isAnchor ? 'a' : $tag;
@endphp
<component
    is="{{ $tag }}"
    {{ $attributes->class('font-medium relative') }}
>
    @if ($isAnchor)
        <x-heroicon-o-arrow-left class="absolute left-0 top-1/2 h-4 -translate-x-full -translate-y-1/2 pr-6" />
    @endif
    {{ $slot }}

</component>
