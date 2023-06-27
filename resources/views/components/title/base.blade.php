@props([
    'tag' => ($isAnchor = $attributes->filter(null)->hasAny('href', ':href', 'v-bind:href')) ? 'a' : 'p',
])
<component
    is="{{ $tag }}"
    {{ $attributes->class('font-medium relative') }}
>
    @if ($isAnchor)
        <x-heroicon-o-arrow-left class="absolute left-0 top-1/2 h-4 -translate-x-full -translate-y-1/2 pr-6" />
    @endif
    {{ $slot }}

</component>
