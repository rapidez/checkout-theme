<x-rapidez-ct::card.inactive>
    <div class="flex flex-wrap -space-x-px max-sm:-space-y-px">
        <div class="flex flex-1 flex-col -space-y-px">
            <template v-if="checkout.hide_billing || checkout.shipping_address?.customer_address_id == checkout.billing_address?.customer_address_id">
                <x-rapidez-ct::card.address
                    v-bind:address="checkout.shipping_address"
                    shipping
                    billing
                    check
                />
            </template>
            <template v-else>
                <x-rapidez-ct::card.address
                    v-bind:address="checkout.shipping_address"
                    shipping
                    check
                />
                <x-rapidez-ct::card.address
                    v-bind:address="checkout.billing_address"
                    billing
                    check
                />
            </template>
        </div>
        <div class="flex flex-1 flex-col -space-y-px">
            <x-rapidez-ct::card.white
                class="flex-1"
                check
            >
                <x-rapidez-ct::title.lg class="mb-4 pr-8">
                    @lang('Payment method')
                </x-rapidez-ct::title.lg>
                <div class="flex flex-1 flex-wrap justify-between">
                    <ul class="flex flex-col gap-1">
                        <li
                            v-for="method in order.sales_order_payments"
                            v-text="method.additional_information.method_title"
                        ></li>
                    </ul>
                    @if (!empty($slot))
                        <div class="mt-auto flex flex-col self-end">
                            {{ $slot }}
                        </div>
                    @endif
                </div>
            </x-rapidez-ct::card.white>
            <x-rapidez-ct::card.white
                class="flex-1"
                check
            >
                <x-rapidez-ct::title.lg class="mb-4 pr-8">
                    @lang('Delivery method')
                </x-rapidez-ct::title.lg>
                <div class="flex flex-1 flex-wrap justify-between">
                    <ul class="flex flex-col gap-1">
                        <li v-text="order.shipping_description"></li>
                    </ul>
                    @if (!empty($slot))
                        <div class="mt-auto flex flex-col self-end">
                            {{ $slot }}
                        </div>
                    @endif
                </div>
            </x-rapidez-ct::card.white>
        </div>
    </div>
</x-rapidez-ct::card.inactive>
