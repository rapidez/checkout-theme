@props(['title' => ''])

<input type="checkbox" id="popup" class="peer hidden"/>
<div class="fixed inset-0 opacity-0 transition z-50 flex justify-center items-center pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto">
    <x-rapidez-ct::sections class="relative z-10">
        <x-rapidez-ct::card.inactive>
            <label for="popup" class="absolute cursor-pointer z-10 top-7 right-7 w-5 h-5">
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
    <label class="absolute inset-0 bg-ct-primary/60 cursor-pointer" for="popup"></label>
</div>
