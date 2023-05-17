@props(['tag' => 'p'])
<component
    is="{{ $tag }}"
    {{ $attributes->class('text-2xl font-medium') }}
>
    {{ $slot }}
</component>
