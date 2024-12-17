@props(['title' => '', 'id' => 'popup'])

<input type="checkbox" id="{{ $id }}" class="peer hidden"/>
<div class="fixed inset-0 opacity-0 transition z-popup flex justify-center items-center pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto lg:py-5">
    <x-rapidez-ct::sections class="relative z-10 max-h-full overflow-y-auto scrollbar-hide">
        <x-rapidez-ct::card.inactive>
            <label for="{{ $id }}" class="absolute cursor-pointer z-10 top-7 right-7 w-5 h-5">
                <x-heroicon-o-x-mark />
            </label>
            @if($title)
                <x-rapidez-ct::title class="mb-5">
                    {{ $title instanceof \Illuminate\View\ComponentSlot ? $title : __($title) }}
                </x-rapidez-ct::title>
            @endif
            {{ $slot }}
        </x-rapidez-ct::card.inactive>
    </x-rapidez-ct::sections>
    <label class="absolute inset-0 bg-black/60 cursor-pointer" for="{{ $id }}"></label>
</div>
