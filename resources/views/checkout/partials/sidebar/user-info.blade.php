<x-rapidez-ct::card v-if="checkout.shipping_address && checkout?.shipping_address?.firstname && checkout.step !== 3">
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('Shipping & billing address')
    </x-rapidez-ct::title.lg>
    <div class="flex flex-wrap justify-between">
        <ul class="[&>*+*]:mt-1">
            <li v-if="checkout?.shipping_address?.firstname && checkout?.shipping_address?.lastname">
                @{{ checkout?.shipping_address?.firstname + ' ' + (checkout?.shipping_address?.middlename ?? '') + ' ' + checkout?.shipping_address?.lastname }}
            </li>
            <li v-if="checkout?.shipping_address?.street[0] && checkout?.shipping_address?.street[1]">
                @{{ checkout?.shipping_address?.street[0] + ' ' + checkout?.shipping_address?.street[1] + ' ' + (checkout?.shipping_address?.street[2] ?? '') }}
            </li>
            <li v-if="checkout?.shipping_address?.postcode && checkout?.shipping_address?.city">
                @{{ checkout?.shipping_address?.postcode + ' ' + checkout?.shipping_address?.city }}
            </li>
            <li v-if="checkout?.shipping_address?.country_id">
                @{{ checkout?.shipping_address?.country_id }}
            </li>
        </ul>
        <span class="underline text-ct-inactive cursor-pointer self-end" v-if="checkout.step == 2" v-on:click="goToStep(1)" >
            @lang('Edit')
        </span>
    </div>
</x-rapidez-ct::card>
