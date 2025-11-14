<div class="mt-5 rounded bg py-4 text-sm">
    <div class="flex w-full items-center gap-x-6 pr-6 text-xs">
        <div class="sm:w-36"></div>
        <div class="flex-1 sm:w-36">@lang('Product')</div>
        <div class="ml-auto w-16 text-center max-md:hidden">
            @lang('Quantity')
        </div>
    </div>
</div>

<ul class="flex flex-col divide-y">
    <li v-for="(item, productId, index) in order.items" class="flex py-5">
        <div class="flex w-full flex-wrap gap-y-3 gap-x-3 text-sm sm:gap-x-6 sm:pr-6 md:items-center">
            <div class="flex h-24 w-36 items-center justify-center">
                <img
                    class="max-h-24 max-w-36"
                    :alt="item.product_name"
                    :src="`/storage/{{ config('rapidez.store') }}/resizes/200/sku/${item.product_sku}`"
                    height="100"
                    v-if="item.product_sku"
                >
                <x-rapidez::no-image v-else="" class="h-24 w-36"/>
            </div>
            <div class="flex w-36 flex-1 flex-col items-start">
                <a :href="item.url" data-testid="cart-item-name">@{{ item.product_name }}</a>
                <div v-for="option in item.selected_options">
                    @{{ option.label }}: @{{ option.value }}
                </div>
                <div v-for="option in item.entered_options">
                    @{{ option.label }}: @{{ option.value }}
                </div>
            </div>
            <div class="flex items-center justify-between gap-10 font-medium max-sm:flex-1 sm:ml-auto">
                <div class="h-14 w-16 border flex items-center justify-center text-sm">
                    @{{ Math.round(item.quantity_ordered) }}
                </div>
            </div>
        </div>
    </li>
</ul>
