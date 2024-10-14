<input type="checkbox" id="popup" class="peer hidden"/>
<div class="fixed inset-0 opacity-0 transition z-50 max-h-full flex justify-center items-center pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto lg:py-5">
    <x-rapidez-ct::sections class="relative z-10 max-h-full overflow-y-auto scrollbar-hide">
        <x-rapidez-ct::card.inactive>
            <x-rapidez-ct::title class="mb-5">@lang('My addresses')</x-rapidez-ct::title>
            <label class="absolute cursor-pointer top-7 right-7 w-5 h-5" for="popup">
                <x-heroicon-o-x-mark/>
            </label>
            @include('rapidez-ct::checkout.partials.address-card')
        </x-rapidez-ct::card.inactive>
    </x-rapidez-ct::sections>
    <label class="absolute cursor-pointer inset-0 bg-ct-primary/60" for="popup"></label>
</div>
