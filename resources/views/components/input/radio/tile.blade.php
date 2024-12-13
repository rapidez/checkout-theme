<label {{ $attributes->only('class')->class('relative flex w-full cursor-pointer items-center justify-start gap-x-3 rounded border bg-white px-5 sm:px-7 py-7') }}>
    <span class="flex aspect-square size-6 items-center justify-center rounded-full border bg-white">
        <input type="radio" {{ $attributes->except('class') }} class="peer size-3 border-none text-primary transition checked:bg-none focus:ring-0 focus:ring-offset-0" />
        <span class="absolute -inset-y-px -left-px w-1 rounded-l bg-primary opacity-0 transition-all peer-checked:opacity-100"></span>
    </span>
    @isset($slot)
        <span class="flex w-full flex-wrap items-center justify-between gap-x-3">
            {{ $slot }}
        </span>
    @endisset
</label>
