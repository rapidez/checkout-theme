@props(['name' => '', 'id' => uniqid('checkbox-')])
<input
    id="{{ $id }}"
    name="{{ $name }}"
    type="checkbox"
    {{ $attributes->merge(['class' => 'peer hidden']) }}
/>
<label
    class="text-14 text-primary group relative flex cursor-pointer select-none flex-wrap items-center gap-x-3"
    for="{{ $id }}"
>
    <div class="group-peer-checked:border-accent group-peer-checked:bg-ct-accent h-6 w-6 rounded border bg-white transition-all">
    </div>
    <x-icon-check class="group-peer-checked:block absolute left-3 top-3 hidden -translate-x-1/2 -translate-y-1/2 text-white" />
    @isset($slot)
        <span>{{ $slot }}</span>
    @endisset
</label>
