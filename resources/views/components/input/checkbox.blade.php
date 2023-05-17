@props(['name' => '', 'id' => uniqid('checkbox-')])
<input
    id="{{ $id }}"
    type="checkbox"
    name="{{ $name }}"
    {{ $attributes->merge(['class' => 'peer hidden']) }}
/>
<label
    for="{{ $id }}"
    class="group relative flex cursor-pointer select-none flex-wrap items-center gap-x-[12px] text-14 text-primary"
>
    <div class="h-[24px] w-[24px] bg-white rounded border transition-all group-peer-checked:border-accent group-peer-checked:bg-accent">
    </div>
    <x-icon-check class="absolute left-[5px] top-[6px] text-white hidden group-peer-checked:block" />
    @isset($slot)
        <span>{{ $slot }}</span>
    @endisset
</label>
