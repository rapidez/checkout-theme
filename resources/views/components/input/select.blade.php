@props(['name', 'type' => 'text', 'label' => '', 'dusk'])
<label {{ $attributes->only(['v-if', 'v-else', 'v-else-if', 'class'])->merge([
    'class' => 'relative flex flex-col gap-y-2 text-sm',
]) }}>
    @if (isset($label) && $label)
        <div class="flex">
            <span class="text-inactive">{{ $label }}</span>
            @if ($attributes['required'])
                <span>*</span>
            @endif
        </div>
    @endif
    <select
        name="{{ $name }}"
        {{ $attributes->except(['v-if', 'v-else', 'v-else-if', 'class'])->merge([
            'class' => 'cursor-pointer border-ct-border py-4 px-5 text-14 focus:border-ct-primary rounded border bg-white outline-none !ring-0 transition-all disabled:bg-ct-inactive-100',
        ]) }}
    >
        @isset($slot)
            {{ $slot }}
        @endisset
    </select>
</label>
