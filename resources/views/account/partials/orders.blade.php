<template v-if="data.customer.orders.items.length">
    <x-rapidez-ct::sections>
        <x-rapidez-ct::card.inactive class="flex-col" v-for="order in data.customer.orders.items">
            <x-rapidez-ct::title.lg>
                @lang('rapidez-ct::frontend.order') #@{{ order.number }}
            </x-rapidez-ct::title.lg>
            <a :href="'/account/order/'+order.number">

            </a>
        </x-rapidez-ct::card.inactive>
    </x-rapidez-ct::sections>
</template>

<template v-else>
    <x-rapidez-ct::sections>
        <x-rapidez-ct::card.inactive>
            @lang('rapidez-ct::frontend.account.dashboard.no_orders')
        </x-rapidez-ct::card.inactive>
    </x-rapidez-ct::sections>
</template>
