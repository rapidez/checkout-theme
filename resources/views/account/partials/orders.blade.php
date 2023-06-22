<div>
    <template v-if="data.customer.orders.items.length">
        <x-rapidez-ct::sections>
            <a
                class="block"
                v-for="order in data.customer.orders.items"
                :href="'/account/order/' + order.number"
            >
                <x-rapidez-ct::card.inactive class="flex-col">
                    <x-rapidez-ct::title.lg>
                        @lang('Order') #@{{ order.number }}
                    </x-rapidez-ct::title.lg>
                    <x-rapidez-ct::card.white class="mt-5 flex flex-wrap items-center gap-x-3 md:gap-x-8">
                        <x-heroicon-s-shopping-cart class="h-5 text-ct-inactive" />
                        <div class="flex flex-col">
                            <span class="font-medium">
                                @lang('Number of products')
                                (@{{ order.items.length }})
                            </span>
                            <span class="text-inactive">
                                @lang('Total price'): @{{ order.total.grand_total.value | price }}
                                /
                                @lang('Order date'): @{{ (new Date(order.order_date)).toLocaleDateString() }}
                            </span>
                        </div>
                        <x-heroicon-o-chevron-right class="ml-auto h-4 max-sm:hidden" />
                    </x-rapidez-ct::card.white>
                </x-rapidez-ct::card.inactive>
            </a>
        </x-rapidez-ct::sections>
    </template>

    <template v-else>
        <x-rapidez-ct::sections>
            <x-rapidez-ct::card.inactive>
                @lang('You do not have any orders yet.')
            </x-rapidez-ct::card.inactive>
        </x-rapidez-ct::sections>
    </template>
    <x-rapidez-ct::toolbar>
        <x-rapidez-ct::button.outline href="/account">
            @lang('Back to account')
        </x-rapidez-ct::button.outline>
    </x-rapidez-ct::toolbar>
</div>
