<graphql
    query='@include('rapidez::account.partials.queries.order')'
    check="data.customer.orders.items[0]"
    cache="orderdetail{{ $id }}"
>
    <x-rapidez-ct::card v-if="data" slot-scope="{ data }">
        <x-rapidez-ct::title.lg class="mb-4">
            @lang('Order overview')
        </x-rapidez-ct::title.lg>
        <x-rapidez-ct::separated-listing>
            <li>
                <span>@lang('Total price (incl. VAT)')</span>
                <span>@{{ data.customer.orders.items[0].total.grand_total.value | price }}</span>
            </li>
        </x-rapidez-ct::separated-listing>
    </x-rapidez-ct::card>
</graphql>
