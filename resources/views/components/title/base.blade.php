@props(['tag' => ($isAnchor = $attributes->filter(null)->hasAny('href', ':href', 'v-bind:href')) ? 'a' : 'p'])
<x-tag is="{{ $tag }}" {{ $attributes->class('font-medium relative group') }}>
    @if ($isAnchor)
        <x-heroicon-o-arrow-left class="lg:absolute max-lg:mb-5 left-0 top-1/2 h-4 lg:-translate-x-full lg:-translate-y-1/2 lg:pr-6 text-ct-inactive group-hover:text-ct-neutral transition" />
    @endif
    {{ $slot }}
</x-tag>
