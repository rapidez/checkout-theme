@props(['name'])
<label
    class="flex flex-col text-14 text-ct-primary"
    {{ $attributes->only(['v-if', 'v-else', 'v-else-if']) }}
>
    <select
        name="{{ $name }}"
        {{ $attributes->except(['v-if', 'v-else', 'v-else-if'])->merge(['class' => 'cursor-pointer border-ct-border py-3 w-[72px] h-[52px] px-5 text-14 focus:border-ct-primary rounded border bg-ct-white outline-none !ring-0 transition-all disabled:bg-ct-inactive-100']) }}
    >
        @isset($slot)
            {{ $slot }}
        @endisset
    </select>
</label>
