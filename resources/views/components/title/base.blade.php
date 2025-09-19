@props(['tag' => 'div'])

<x-rapidez::tag :is="$tag" {{ $attributes->class('font-medium relative group') }}>
    {{ $slot }}
</x-rapidez::tag>
