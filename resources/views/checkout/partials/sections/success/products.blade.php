<div class="mt-5 rounded bg-ct-inactive-100 py-4 text-sm">
    <div class="flex w-full items-center gap-x-6 pr-6 text-xs">
        <div class="sm:w-[150px]"></div>
        <div class="flex-1 sm:w-[150px]">@lang('Product')</div>
        <div class="ml-auto w-16 text-center max-md:hidden">
            @lang('Amount')
        </div>
    </div>
</div>

<ul class="flex flex-col divide-y">
    <li v-for="(item, productId, index) in order.sales_order_items" class="flex py-5">
        <div class="flex w-full flex-wrap gap-y-3 gap-x-3 text-sm sm:gap-x-6 sm:pr-6 md:items-center">
            <div class="flex h-[100px] w-[150px] items-center justify-center">
                <img
                    class="max-h-[100px] max-w-[150px]"
                    :alt="item.name"
                    :src="'/storage/resizes/200/magento/catalog/product' + item.image"
                    height="100"
                    v-if="item.image"
                >
                <x-rapidez::no-image v-else class="h-[100px] w-[150px]"/>
            </div>
            <div class="flex w-[150px] flex-1 flex-col items-start">
                <a :href="item.url" dusk="cart-item-name">@{{ item.name }}</a>
                <div v-for="(optionValue, option) in item.options">
                    @{{ option }}: @{{ optionValue }}
                </div>
            </div>
            <div class="flex items-center justify-between gap-10 font-medium max-sm:flex-1 sm:ml-auto">
                <div class="h-14 w-16 border flex items-center justify-center text-sm">
                    @{{ Math.round(item.qty_ordered) }}
                </div>
            </div>
        </div>
    </li>
</ul>
