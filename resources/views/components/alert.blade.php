<div {{ $attributes->class('flex items-start rounded-sm gap-x-1 font-medium text-yellow-800 border border-yellow-300 bg-yellow-100 text-xs w-fit px-2 py-1') }}>
    <x-heroicon-o-exclamation-circle class="w-5 shrink-0" />
    <span class="mt-0.5">{{ $slot }}</span>
</div>
