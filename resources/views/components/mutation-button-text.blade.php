@props(['condition' => 'mutated || mutating'])

<div :class="{ 'opacity-0': ({!! $condition !!}) && !error }">
    {{ $slot }}
</div>
<div
    class="absolute inset-0 p-3"
    v-if="({!! $condition !!}) && !error"
>
    <x-heroicon-o-arrow-path
        class="mx-auto h-full animate-spin"
        v-if="mutating"
    />
    <x-heroicon-o-check
        class="mx-auto h-full"
        v-else
    />
</div>