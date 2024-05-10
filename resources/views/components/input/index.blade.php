
@props(['label' => false])
<label {{ $attributes->only(['v-if', 'v-else', 'v-else-if', 'class'])->merge(['class' => 'relative flex flex-col gap-y-1.5 sm:gap-y-2 text-sm']) }}>
    @if ($label)
        <x-rapidez-ct::input.label :required="$attributes->get('required')">
            @lang($label)
        </x-rapidez-ct::input.label>
    @endif
    <input {{ $attributes->merge([
        'id' => $attributes->get('name'),
        'type' => 'text',
        'dusk' => $attributes->get('v-bind:dusk') ? null : $attributes->get('name'),
        'class' => 'rounded peer border border-ct-border bg-white py-3.5 sm:py-4 px-5 text-sm outline-none !ring-0 transition-all placeholder:text-ct-inactive focus:border-ct-neutral disabled:bg-ct-disabled disabled:text-ct-inactive font-medium disabled:pr-12',
    ]) }}>
    {{ $slot }}
    <x-heroicon-o-lock-closed class="absolute right-5 bottom-4 hidden h-5 peer-disabled:block" />
</label>
