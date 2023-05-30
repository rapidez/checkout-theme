@props(['name', 'type' => 'text', 'label' => '', 'dusk'])
<label {{ $attributes->only(['v-if', 'v-else', 'v-else-if', 'class'])->merge(['class' => 'relative flex flex-col gap-y-2 text-sm']) }}>
    @if (isset($label) && $label)
        <div class="flex">
            <span class="text-inactive">{{ $label }}</span>
            @if ($attributes['required'])
                <span>*</span>
            @endif
        </div>
    @endif
    <input {{ $attributes->except(['v-if', 'v-else', 'v-else-if', 'class'])->merge([
        'id' => $name,
        'name' => $name,
        'type' => $type,
        'dusk' => $attributes->get('v-bind:dusk') ? null : $name,
        'class' => 'rounded border border-border bg-white py-4 px-5 text-sm outline-none !ring-0 transition-all placeholder:text-inactive focus:border-primary disabled:bg-ct-inactive-100 disabled:text-inactive',
    ]) }}>
    {{ $slot }}
</label>
