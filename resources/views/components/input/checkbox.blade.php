@props(['name' => '', 'id' => uniqid('checkbox-')])
<input
    id="{{ $id }}"
    name="{{ $name }}"
    type="checkbox"
    {{ $attributes->merge(['class' => 'peer hidden']) }}
/>
<label
    class="group relative flex cursor-pointer select-none flex-wrap items-center gap-x-3 text-14 text-primary"
    for="{{ $id }}"
>
    <div class="h-6 w-6 rounded border bg-ct-white transition-all group-peer-checked:border-accent group-peer-checked:bg-ct-accent">
    </div>
    <x-icon-check class="absolute left-3 top-3 hidden -translate-x-1/2 -translate-y-1/2 text-white group-peer-checked:block" />
    @isset($slot)
        <span>{{ $slot }}</span>
    @endisset
</label>
