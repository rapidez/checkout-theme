@props(['customTitle' => null, 'disabled' => false, 'check' => false])

@php
    $attributes = $attributes->merge([
        'v-bind:disabled' => var_export($disabled, true),
        'v-bind:check' => var_export($check, true),
    ]);
@endphp
<x-rapidez-ct::card.white
    {{ $attributes->only('v-if') }}
    v-bind:class="{!! $attributes['v-bind:disabled'] !!} ? '!bg-ct-disabled !text-ct-inactive' : ''"
>
    <x-rapidez-ct::address :$attributes :$customTitle>
        {{ $slot }}
        <x-slot:empty>
            {{ $empty ?? '' }}
        </x-slot>
    </x-rapidez-ct::address>
</x-rapidez-ct::card.white>
