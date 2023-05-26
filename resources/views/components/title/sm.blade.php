@props(['tag' => 'p'])
<component
    is="{{ $tag }}"
    {{ $attributes->class('text-sm font-medium') }}
>
    {{ $slot }}
</component>
