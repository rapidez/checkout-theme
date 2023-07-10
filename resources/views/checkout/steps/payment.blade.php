<x-rapidez-ct::title-progress-bar
    href="#"
    v-on:click.prevent="goToStep(1)"
>
    @lang('Payment')
</x-rapidez-ct::title-progress-bar>

<x-rapidez-ct::sections>
    @include('rapidez-ct::checkout.partials.sections.payment')
</x-rapidez-ct::sections>

<x-rapidez-ct::toolbar>
    <x-rapidez-ct::button.outline v-on:click.prevent="goToStep(1)">
        @lang('Back to credentials')
    </x-rapidez-ct::button.outline>
    <x-rapidez-ct::button.enhanced
        form="payment"
        type="submit"
        dusk="continue"
        class="w-32 flex items-center justify-center"
    >
        <x-heroicon-o-refresh
            class="mr-2 h-5 w-5 animate-spin"
            v-if="$root.loading && checkout.payment_method"
        />
        <span v-else>
            @lang('Place order')
        </span>
    </x-rapidez-ct::button.enhanced>
</x-rapidez-ct::toolbar>
