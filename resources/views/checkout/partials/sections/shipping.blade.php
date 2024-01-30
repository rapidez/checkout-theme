<x-rapidez-ct::card.inactive>
    @include('rapidez-ct::checkout.partials.shipping-title')

    <div v-for="(method, index in checkout.shipping_methods" class="mt-5 flex flex-col gap-2">
        <x-rapidez-ct::input.radio
            v-bind:value="method.carrier_code+'_'+method.method_code"
            v-bind:dusk="'method-'+index"
            v-model="checkout.shipping_method"
            name="shipping_method"
            required
        >
            @include('rapidez-ct::checkout.partials.shipping.method-titles')
            @include('rapidez-ct::checkout.partials.shipping.info')
        </x-rapidez-ct::input.radio>
    </div>
</x-rapidez-ct::card.inactive>
