<label class="relative flex w-full cursor-pointer items-center justify-start gap-x-3 rounded border bg-white p-7 text-sm text-ct-primary">
    <input
        type="radio"
        {{ $attributes->merge(['class' => 'peer hidden']) }}
    />
    <div class="absolute -inset-y-px -left-px w-1 rounded-l bg-ct-accent opacity-0 transition-all peer-checked:opacity-100">
    </div>
    <div class="relative aspect-square w-6 shrink-0 rounded-full border bg-white transition-all after:absolute after:inset-1 after:rounded-full after:bg-ct-accent after:opacity-0 after:transition-all after:peer-checked:opacity-100 peer-disabled:bg-ct-inactive-100">
    </div>
    @isset($slot)
        <div class="flex w-full flex-wrap justify-between items-center gap-x-3">
            {{ $slot }}
        </div>
    @endisset
</label>
