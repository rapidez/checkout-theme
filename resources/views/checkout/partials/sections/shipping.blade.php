<section>
    <x-rapidez-ct::title.lg>
        @lang('Shipping method')
    </x-rapidez-ct::title.lg>

    <div class="my-2" v-for="(method, index in checkout.shipping_methods">
        <x-rapidez::radio
            v-bind:value="method.carrier_code+'_'+method.method_code"
            v-bind:dusk="'method-'+index"
            v-model="checkout.shipping_method"
        >
            @{{ method.method_title }}
        </x-rapidez::radio>
    </div>
</section>
