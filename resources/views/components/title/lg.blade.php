@props(['tag' => 'p'])
<component
    is="{{ $tag }}"
    {{ $attributes->class('text-18 font-medium') }}
>
    {{ $slot }}
</component>
