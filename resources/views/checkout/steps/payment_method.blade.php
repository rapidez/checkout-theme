<x-rapidez-ct::sections>
    <x-rapidez-ct::card.inactive>
        @include('rapidez-ct::checkout.partials.sections.payment')
    </x-rapidez-ct::card.inactive>
</x-rapidez-ct::sections>

<x-rapidez-ct::toolbar>
    <x-rapidez-ct::button.outline :href="route('checkout', ['step' => 'credentials'])">
        @lang('Back to credentials')
    </x-rapidez-ct::button.outline>


    <graphql-mutation
        :query="config.queries.placeOrder"
        :variables="{ cart_id: mask }"
        :before-request="handleBeforePlaceOrderHandlers"
        :callback="handlePlaceOrder"
        mutate-event="placeOrder"
        redirect="{{ route('checkout.success') }}"
        v-slot="{ mutate, variables }"
    >
        <fieldset>
            <x-rapidez-ct::button.accent class="relative" type="submit" dusk="continue" loader>
                @lang('Place order')
            </x-rapidez-ct::button.accent>
        </fieldset>
    </graphql-mutation>

</x-rapidez-ct::toolbar>
