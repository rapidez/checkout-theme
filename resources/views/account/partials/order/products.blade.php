<div class="mt-5">
    <div class="rounded bg py-4 text-sm">
        <div class="flex w-full flex-wrap gap-y-3 gap-x-3 text-sm sm:gap-x-6 sm:pr-6 md:items-center">
            <div class="sm:w-[150px]"></div>
            <div class="flex-1 sm:w-[150px]">@lang('Product')</div>
            <div class="flex items-center justify-between gap-10 font-medium max-md:hidden max-sm:flex-1 sm:ml-auto">
                <div class="w-[60px]">@lang('Price')</div>
                <div class="w-16 text-center">@lang('Quantity')</div>
                <div class="w-[60px]">@lang('Subtotal')</div>
            </div>
        </div>
    </div>
    <ul class="flex flex-col divide-y">
        <li class="flex py-5" v-for="item in order.items">
            <div class="flex w-full flex-wrap gap-y-3 gap-x-3 text-sm sm:gap-x-6 sm:pr-6 md:items-center">
                <div class="flex h-[100px] w-[150px] items-center justify-center">
                    <img
                        class="max-h-[100px] max-w-[150px]"
                        :alt="item.product_name"
                        :src="`/storage/{{ config('rapidez.store') }}/resizes/200/sku/${item.product_sku}`"
                        height="100"
                        v-if="item.product_sku"
                    >
                    <x-rapidez::no-image v-else class="h-[100px] w-[150px]"/>
                </div>
                <div class="flex w-[150px] flex-1 flex-col items-start">
                    <a :href="item.url" data-testid="cart-item-name">@{{ item.product_name }}</a>
                    <div class="text-xs text-muted">
                        @{{ item.product_sku }}
                    </div>
                    <div v-for="(optionValue, option) in item.options">
                        @{{ option }}: @{{ optionValue }}
                    </div>
                </div>
                <div class="flex items-center justify-between gap-10 font-medium max-sm:flex-1 sm:ml-auto">
                    <div class="flex flex-col gap-px text-sm sm:w-[60px]">
                        @{{ item.product_sale_price.value | price }}
                    </div>
                    <div class="flex h-14 w-16 items-center justify-center border text-sm">
                        @{{ Math.round(item.quantity_ordered) }}
                    </div>
                    <div class="text-sm sm:w-[60px]">
                        @{{ item.product_sale_price.value * item.quantity_ordered | price }}
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
