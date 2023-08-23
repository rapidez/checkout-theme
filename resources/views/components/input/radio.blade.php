<label {{ $attributes->only('class')->class("relative flex w-full cursor-pointer items-center justify-start gap-x-3 rounded border bg-white px-5 sm:px-7 py-7 text-sm text-ct-primary") }}>
    {{-- The 0 opacity and 1px width ensures the element is "visible" for the browser so the browser can focus which is useful for validation --}}
    <input type="radio" {{ $attributes->except('class')->merge(['class' => 'peer opacity-0 border-0 w-px']) }}/>
    <div class="absolute -inset-y-px -left-px w-1 rounded-l bg-ct-accent opacity-0 transition-all peer-checked:opacity-100"></div>
    {{-- TODO: Check if we can't just style the radio? --}}
    <div class="relative aspect-square w-6 shrink-0 rounded-full border bg-white transition-all after:absolute after:inset-1 after:rounded-full after:bg-ct-accent after:opacity-0 after:transition-all after:peer-checked:opacity-100 peer-disabled:bg-ct-inactive-100"></div>
    @isset($slot)
        <div class="flex w-full flex-wrap items-center justify-between gap-x-3">
            {{ $slot }}
        </div>
    @endisset
</label>
