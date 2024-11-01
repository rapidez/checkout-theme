@props(['check' => false])
<div {{ $attributes->class('relative flex-1 rounded border bg-white px-8 py-6') }}>
    @if ($check)
        <template v-if="{{ $check }}">
            <x-heroicon-o-check class="absolute right-7 top-7 w-5 text-ct-accent" stroke-width="2.5" />
        </template>
    @endif
    {{ $slot }}
</div>
