<x-rapidez-ct::card.inactive>
    <div class="flex flex-wrap -space-x-px max-sm:-space-y-px">
        <checkout-success-addresses :order="order">
            <div slot-scope="{ hideBilling, shipping, billing }" class="flex flex-1 flex-col -space-y-px">
                <template v-if="hideBilling">
                    <x-rapidez-ct::card.address v-bind:address="shipping" shipping billing check/>
                </template>
                <x-rapidez-ct::card.address v-if="!hideBilling && shipping" v-bind:address="shipping" shipping check/>
                <x-rapidez-ct::card.address v-if="!hideBilling && billing" v-bind:address="billing" billing check/>
            </div>
        </checkout-success-addresses>
        <div class="flex flex-1 flex-col -space-y-px">
            <x-rapidez-ct::card.white class="flex-1" check>
                <x-rapidez-ct::title.lg class="mb-4 pr-8">
                    @lang('Payment method')
                </x-rapidez-ct::title.lg>
                <div class="flex flex-1 flex-wrap justify-between">
                    <ul class="flex flex-col gap-1">
                        <li v-for="method in order.payment_methods">
                            @{{ method.name || method.type }}
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
</x-rapidez-ct::card.inactive>
