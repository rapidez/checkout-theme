@props(['name', 'type' => 'text', 'label' => '', 'dusk'])
<label {{ $attributes->only(['v-if', 'v-else', 'v-else-if', 'class'])->merge(['class' => 'relative flex flex-col gap-y-2 text-sm']) }}>
    <x-rapidez-ct::input.label :$label />
    <input {{ $attributes->except(['v-if', 'v-else', 'v-else-if', 'class'])->merge([
        'id' => $name,
        'name' => $name,
        'type' => $type,
        'dusk' => $attributes->get('v-bind:dusk') ? null : $name,
        'class' => 'rounded border border-border bg-white py-4 px-5 text-sm outline-none !ring-0 transition-all placeholder:text-ct-inactive focus:border-ct-primary disabled:bg-ct-inactive-200 disabled:text-ct-inactive disabled:pr-12',
    ]) }}>
    {{ $slot }}
    @if ($attributes['disabled'])
        <x-heroicon-o-lock-closed class="absolute right-5 bottom-4 h-5" />
    @endif
</label>
