@props(['tag' => 'ul'])
<x-tag is="{{ $tag }}" {{ $attributes->class('flex flex-col text-sm mt-1 divide-y [&>*]:py-4 [&>*:first-child]:pt-0 [&>*:last-child]:pb-0 [&>*]:flex [&>*]:flex-wrap [&>*]:justify-between') }}>
    {{ $slot }}
</x-tag>
