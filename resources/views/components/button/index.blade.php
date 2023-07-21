@props(['loader' => false, 'tag'])
<x-tag
    is="{{ $tag ?? ($attributes->has('href') || $attributes->has('v-bind:href') ? 'a' : 'button') }}"
    {{ $attributes->class([
        'relative inline-block self-start rounded py-4 px-6 text-center text-sm transition',
        'disabled:cursor-not-allowed disabled:opacity-70',
    ]) }}
    v-bind:disabled="$root.loading"
>
    @if($loader)
        <div v-if="$root.loading" class="absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2">
            <x-heroicon-o-refresh class="h-5 w-5 animate-spin" />
        </div>
    @endif
    <span class="contents" @attributes([':class' => $loader ? '{ "invisible": $root.loading }' : false])>
        {{ $slot }}
    </span>
</x-tag>
