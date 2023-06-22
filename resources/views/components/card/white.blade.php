@props(['check' => false])
<div {{ $attributes->class('relative flex-1 rounded border bg-white px-8 py-6') }}>
    @if ($check)
        <template v-if="{{ $check }}">
            <x-heroicon-s-check class="absolute right-7 top-7 w-5 text-ct-accent" />
        </template>
    @endif
    {{ $slot }}
</div>
