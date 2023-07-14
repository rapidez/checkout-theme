<x-rapidez-ct::card.inactive>
    <x-rapidez-ct::title.lg>
        @lang('Shipping method')
    </x-rapidez-ct::title.lg>

    <div v-for="(method, index in checkout.shipping_methods" class="mt-5 flex flex-col gap-2">
        <x-rapidez-ct::input.radio
            v-bind:value="method.carrier_code+'_'+method.method_code"
            v-bind:dusk="'method-'+index"
            v-model="checkout.shipping_method"
            name="shipping_method"
            required
        >
            <div class="sm:w-3/5">@{{ method.carrier_title }}</div>
            <div class="flex-1">@{{ method.method_title }}</div>
            <div class="text-right text-sm font-medium">
                <div
                    class="text-ct-inactive"
                    v-if="method.amount > 0"
                >@{{ method.amount | price }}</div>
                <div
                    class="text-ct-enhanced"
                    v-else
                >
                    @lang('Free')
                </div>
            </div>
        </x-rapidez-ct::input.radio>
    </div>
</x-rapidez-ct::card.inactive>
