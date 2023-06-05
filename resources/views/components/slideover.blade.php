@props(['id', 'title' => ''])
<input
    class="peer hidden"
    type="checkbox"
    v-bind:id="{{ $id }}"
/>
<label
    class="pointer-events-none fixed inset-0 z-50 cursor-pointer bg-ct-primary/60 opacity-0 transition peer-checked:pointer-events-auto peer-checked:opacity-100"
    v-bind:for="{{ $id }}"
></label>
<div class="pointer-events-none fixed top-0 -right-full z-50 flex h-screen w-full max-w-md flex-col bg-white transition-[right] duration-300 peer-checked:pointer-events-auto peer-checked:right-0">
    <div class="flex w-full items-center justify-center bg-ct-primary py-4 px-5 text-lg font-bold text-white">
        <div>{{ $title }}</div>
        <label
            class="absolute right-5 cursor-pointer"
            v-bind:for="{{ $id }}"
        >
            <x-heroicon-o-x class="h-6" />
        </label>
    </div>
    <div class="overflow-auto p-5">
        {{ $slot }}
    </div>
</div>
