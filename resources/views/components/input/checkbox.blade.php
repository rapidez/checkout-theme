@props(['name' => '', 'id' => uniqid('checkbox-')])
<input
    id="{{ $id }}"
    name="{{ $name }}"
    type="checkbox"
    {{ $attributes->merge(['class' => 'peer hidden']) }}
/>
<label
    class="text-14 text-primary group relative flex cursor-pointer select-none flex-wrap items-center gap-x-[12px]"
    for="{{ $id }}"
>
    <div class="bg-ct-white group-peer-checked:border-accent group-peer-checked:bg-ct-accent h-[24px] w-[24px] rounded border transition-all">
    </div>
    <x-icon-check class="group-peer-checked:block absolute left-[5px] top-[6px] hidden text-white" />
    @isset($slot)
        <span>{{ $slot }}</span>
    @endisset
</label>
