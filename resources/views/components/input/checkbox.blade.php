@props(['name' => '', 'id' => uniqid('checkbox-')])
<label
    for="{{ $id }}"
    {{ $attributes->only('class')->class('text-ct-primary relative flex cursor-pointer select-none flex-wrap gap-x-3 text-sm [&>span]:flex-1') }}
>
    <input
        class="peer hidden"
        id="{{ $id }}"
        name="{{ $name }}"
        type="checkbox"
        {{ $attributes->except('class') }}
    />
    <div class="h-6 w-6 rounded border bg-white transition-all peer-checked:border-ct-accent peer-checked:bg-ct-accent">
    </div>
    <x-icon-check class="absolute left-3 top-3 hidden -translate-x-1/2 -translate-y-1/2 text-white peer-checked:block" />
    @isset($slot)
        <span {{ $slot->attributes ?? '' }}>{{ $slot }}</span>
    @endisset
</label>
