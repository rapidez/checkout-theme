<x-rapidez-ct::sections>
    <x-rapidez-ct::card.inactive>
        @include('rapidez-ct::checkout.partials.sections.payment')
    </x-rapidez-ct::card.inactive>
</x-rapidez-ct::sections>

<x-rapidez-ct::toolbar>
    <x-rapidez::button.outline :href="route('checkout', ['step' => 'credentials'])">
        @lang('Back to credentials')
    </x-rapidez::button.outline>


    <graphql-mutation
        :query="config.queries.placeOrder"
        :variables="{ cart_id: mask.value }"
        :before-request="handleBeforePlaceOrderHandlers"
        :callback="handlePlaceOrder"
        mutate-event="placeOrder"
        redirect="{{ route('checkout.success') }}"
        v-slot="{ mutate, variables }"
    >
        <fieldset>
            <x-rapidez::button.conversion class="relative" type="submit" data-testid="continue" loader>
                @lang('Place order')
            </x-rapidez::button.conversion>
        </fieldset>
    </graphql-mutation>

</x-rapidez-ct::toolbar>
