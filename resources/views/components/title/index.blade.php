@props(['tag' => 'p'])
<component
    is="{{ $tag }}"
    {{ $attributes->class('text-24 font-medium') }}
>
    {{ $slot }}
</component>
