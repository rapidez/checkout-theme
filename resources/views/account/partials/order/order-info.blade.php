<div class="flex flex-wrap -space-x-px max-sm:-space-y-px">
    <div class="flex flex-1 flex-col -space-y-px">
        <template v-if="order.hide_billing || hideBilling || order.shipping_address?.customer_address_id == order.billing_address?.customer_address_id">
            <x-rapidez-ct::card.address
                v-bind:address="order.shipping_address"
                shipping
                billing
                check
            />
        </template>
        <template v-else>
            <x-rapidez-ct::card.address
                v-bind:address="order.shipping_address"
                shipping
                check
            />
            <x-rapidez-ct::card.address
                v-bind:address="order.billing_address"
                billing
                check
            />
        </template>
    </div>
    <div class="flex flex-1 flex-col -space-y-px">
        <x-rapidez-ct::card.white class="flex-1" check>
            <x-rapidez-ct::title.lg class="mb-4 pr-8">
                @lang('Payment method')
            </x-rapidez-ct::title.lg>
            <div class="flex flex-1 flex-wrap justify-between">
                <ul class="flex flex-col gap-1">
                    <li v-for="data in order.payment_methods">
                        @{{ data.name }}
                    </li>
                </ul>
                @if (!empty($slot))
                    <div class="mt-auto flex flex-col self-end">
                        {{ $slot }}
                    </div>
                @endif
            </div>
        </x-rapidez-ct::card.white>
        <x-rapidez-ct::card.white class="flex-1" check>
            <x-rapidez-ct::title.lg class="mb-4 pr-8">
                @lang('Delivery method')
            </x-rapidez-ct::title.lg>
            <div class="flex flex-1 flex-wrap justify-between">
                <ul class="flex flex-col gap-1">
                    <li v-text="order.shipping_method"></li>
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
