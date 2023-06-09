@props(['name', 'type' => 'text', 'label' => '', 'dusk', 'required' => false])
<label {{ $attributes->only(['v-if', 'v-else', 'v-else-if', 'class'])->class('relative flex flex-col gap-y-2 text-sm line-clamp-1') }}>
    <x-rapidez-ct::input.label :$required>
        @lang($label)
    </x-rapidez-ct::input.label>
    <select
        name="{{ $name }}"
        {{ $attributes->except(['v-if', 'v-else', 'v-else-if', 'class'])->merge([
            'class' => 'cursor-pointer border-ct-border py-4 px-5 text-sm focus:border-ct-primary font-medium rounded border bg-white outline-none !ring-0 transition-all disabled:bg-ct-inactive-100',
        ]) }}
    >
        @isset($slot)
            {{ $slot }}
        @endisset
    </select>
</label>
