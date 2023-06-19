<graphql query="@include('rapidez-ct::account.partials.queries.customer-address')">
    <template
        slot-scope="{ data, address }"
        v-if="data"
        v-cloak:set="address = data?.customer?.addresses.find(a => a.default_billing || a.default_shipping)"
    >
        <x-rapidez-ct::card>
            <x-rapidez-ct::title.lg class="mb-5">
                <template v-if="!address || address.default_shipping && address.default_billing">@lang('Shipping & Billing address')</template>
                <template v-else-if="address.default_shipping">@lang('Shipping address')</template>
                <template v-else-if="address.default_billing">@lang('Billing address')</template>
            </x-rapidez-ct::title.lg>
            <x-rapidez-ct::seperated-listing class="font-medium">
                <template v-if="address">
                    <li>@{{ address.company }}</li>
                    <li>@{{ address.firstname }} @{{ address.middlename }} @{{ address.lastname }}</li>
                    <li>@{{ address.street[0] }} @{{ address.street[1] }} @{{ address.street[2] }}</li>
                    <li>@{{ address.postcode }} @{{ address.city }}</li>
                    <li>@{{ address.country_code }}</li>
                </template>
                <template v-else>
                    <li>@lang('No default address has been set yet.')</li>
                </template>
                <a href="/account/edit">
                    <span>@lang('Account settings')</span>
                    <x-heroicon-o-cog class="h-6 stroke-[1.5px]" />
                </a>
            </x-rapidez-ct::seperated-listing>
        </x-rapidez-ct::card>
    </template>
</graphql>
