<label {{ $attributes->only('class')->class("relative flex w-full cursor-pointer items-center justify-start gap-x-3 rounded border bg-white px-5 sm:px-7 py-7 text-sm text-ct-primary") }}>
    <input type="radio" {{ $attributes->except('class') }} class="peer text-ct-accent w-6 h-6 focus:ring-offset-0 focus:ring-0 border-ct-border transition"/>
    <div class="absolute -inset-y-px -left-px w-1 rounded-l bg-ct-accent opacity-0 transition-all peer-checked:opacity-100"></div>
    @isset($slot)
        <div class="flex w-full flex-wrap items-center justify-between gap-x-3">
            {{ $slot }}
        </div>
    @endisset
</label>
