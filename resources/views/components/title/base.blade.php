@props(['tag' => ($isAnchor = $attributes->filter(null)->hasAny('href', ':href', 'v-bind:href')) ? 'a' : 'p'])
<x-tag is="{{ $tag }}" {{ $attributes->class('font-medium relative group') }}>
    @if ($isAnchor)
        <x-heroicon-o-arrow-left class="xl:absolute max-xl:mb-5 left-0 top-1/2 h-4 xl:-translate-x-full xl:-translate-y-1/2 xl:pr-6 text-ct-inactive group-hover:text-ct-primary transition" />
    @endif
    {{ $slot }}
</x-tag>
