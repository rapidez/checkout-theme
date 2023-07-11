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
        class="relative"
        form="payment"
        type="submit"
        dusk="continue"
    >
        <div
            class="absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2"
            v-if="$root.loading"
        >
            <x-heroicon-o-refresh class="h-5 w-5 animate-spin" />
        </div>
        <span v-bind:class="{ 'invisible' : $root.loading }">
            @lang('Place order')
        </span>
    </x-rapidez-ct::button.enhanced>
</x-rapidez-ct::toolbar>
