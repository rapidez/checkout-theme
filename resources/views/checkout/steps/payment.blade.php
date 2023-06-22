<x-rapidez-ct::title-progress-bar
    href="#"
    v-on:click.prevent="goToStep(1)"
>
    @lang('rapidez-ct::frontend.checkout.payment.payment')
</x-rapidez-ct::title-progress-bar>

<x-rapidez-ct::sections>
    @include('rapidez-ct::checkout.partials.sections.payment')
</x-rapidez-ct::sections>

<div class="mt-5 flex flex-wrap justify-between gap-3">
    <x-rapidez-ct::button.outline v-on:click.prevent="goToStep(1)">
        @lang('rapidez-ct::frontend.checkout.payment.back')
    </x-rapidez-ct::button.outline>
    <x-rapidez-ct::button.enhanced
        form="payment"
        type="submit"
        dusk="continue"
    >
        @lang('rapidez-ct::frontend.checkout.payment.order')
    </x-rapidez-ct::button.enhanced>
</div>
