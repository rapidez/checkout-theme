<graphql
    query='@include('rapidez::account.partials.queries.order')'
    :check="(data) => data.customer.orders.items[0]"
    cache="orderdetail{{ $id }}"
    v-slot="{ data }"
>
    <x-rapidez-ct::card v-if="data">
        <x-rapidez-ct::title.lg class="mb-4">
            @lang('Order overview')
        </x-rapidez-ct::title.lg>
        <x-rapidez-ct::separated-listing tag="dl">
            <div>
                <dt>@lang('Total price (incl. VAT)')</dt>
                <dd>@{{ window.price(data.customer.orders.items[0].total.grand_total.value) }}</dd>
            </div>
        </x-rapidez-ct::separated-listing>
    </x-rapidez-ct::card>
</graphql>
