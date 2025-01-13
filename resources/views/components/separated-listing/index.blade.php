@props(['tag' => 'ul'])
<x-rapidez::tag is="{{ $tag }}" {{ $attributes->class('flex flex-col text-sm mt-1 divide-y *:py-4 first:*:pt-0 last:*:pb-0 *:flex *:flex-wrap *:justify-between') }}>
    {{ $slot }}
</x-rapidez::tag>
