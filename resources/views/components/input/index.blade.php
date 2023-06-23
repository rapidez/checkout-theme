@props(['name', 'type' => 'text', 'label' => '', 'dusk', 'required' => false])
<label {{ $attributes->only(['v-if', 'v-else', 'v-else-if', 'class'])->merge(['class' => 'relative flex flex-col gap-y-2 text-sm']) }}>
    @if ($label)
        <x-rapidez-ct::input.label :$required>
            @lang($label)
        </x-rapidez-ct::input.label>
    @endif
    <input {{ $attributes->merge([
        'id' => $name,
        'name' => $name,
        'type' => $type,
        'dusk' => $attributes->get('v-bind:dusk') ? null : $name,
        'class' => 'rounded peer border border-border bg-white py-4 px-5 text-sm outline-none !ring-0 transition-all placeholder:text-ct-inactive focus:border-ct-primary disabled:bg-ct-inactive-200 disabled:text-ct-inactive font-medium disabled:pr-12',
    ]) }}>
    {{ $slot }}
    <x-heroicon-o-lock-closed class="absolute right-5 bottom-4 hidden h-5 peer-disabled:block" />
</label>
