@props(['tag' => 'p'])
<component
    is="{{ $tag }}"
    {{ $attributes->class('text-lg font-medium') }}
>
    {{ $slot }}
</component>
