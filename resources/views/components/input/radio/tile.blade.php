<label {{ $attributes->only('class')->class('relative flex w-full cursor-pointer items-center justify-start gap-x-3 rounded border bg-white px-5 sm:px-7 py-7') }}>
    <x-rapidez::input.radio.base
        class="size-6 text-primary peer"
        name="{{ $name }}"
        {{ $attributes->except('class') }}
    />
    @isset($slot)
        <span class="flex w-full flex-wrap items-center justify-between gap-x-3">
            {{ $slot }}
        </span>
    @endisset
    <div class="absolute -inset-y-px -left-px w-1 rounded-l bg-primary opacity-0 transition-all peer-checked:opacity-100"></div>
</label>
