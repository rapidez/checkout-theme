<graphql query="@include('rapidez::account.partials.queries.overview')">
    <x-rapidez-ct::card
        slot-scope="{ data }"
        v-if="data?.customer"
        v-bind:set-billing="data.customer.billing_address = data.customer.addresses.find(e => e.default_billing)"
        v-bind:set-shipping="data.customer.shipping_address = data.customer.addresses.find(e => e.default_shipping)"
    >
        <x-rapidez-ct::separated-listing tag="div">
            <template v-if="data.customer.addresses.length">
                <template v-if="data.customer.shipping_address?.default_billing || !data.customer.shipping_address || !data.customer.billing_address">
                    <x-rapidez-ct::address v-bind:address="data.customer.shipping_address" shipping billing/>
                </template>
                <template v-else>
                    <x-rapidez-ct::address v-bind:address="data.customer.shipping_address" shipping/>
                    <x-rapidez-ct::address v-bind:address="data.customer.billing_address" billing/>
                </template>
            </template>
            <div v-if="!data.customer.shipping_address && !data.customer.billing_address">
                <x-rapidez-ct::title.lg class="mb-4">
                    @lang('Shipping & billing address')
                </x-rapidez-ct::title.lg>
                @lang('No default address has been set yet.')
            </div>
            <a href="{{ route('account.edit') }}" class="font-medium">
                <span>@lang('Account settings')</span>
                <x-heroicon-o-cog class="size-6 stroke-[1.5px]" />
            </a>
        </x-rapidez-ct::separated-listing>
    </x-rapidez-ct::card>
</graphql>
