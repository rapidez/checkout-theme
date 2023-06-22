<div class="mt-5 rounded bg-ct-inactive-100 py-4 text-sm">
    <div class="flex w-full items-center gap-x-6 pr-6 text-xs">
        <div class="sm:w-[150px]"></div>
        <div class="flex-1 sm:w-[150px]">@lang('rapidez-ct::frontend.product')</div>
        <div class="ml-auto flex items-center gap-10 max-md:hidden">
            <div class="w-[60px]">@lang('rapidez-ct::frontend.price')</div>
            <div class="w-20 text-center">@lang('rapidez-ct::frontend.amount')</div>
            <div class="w-[60px]">@lang('rapidez-ct::frontend.subtotal')</div>
        </div>
    </div>
</div>

<ul>
    <li
        class="flex border-b py-5"
        v-for="(item, productId, index) in cart.items"
    >
        <div class="flex w-full flex-wrap gap-y-3 gap-x-3 sm:gap-x-6 sm:pr-6 text-sm md:items-center">
            <div class="flex h-[100px] w-[150px] items-center justify-center">
                <img
                    class="max-h-[100px] max-w-[150px]"
                    :alt="item.name"
                    :src="'/storage/resizes/200/magento/catalog/product' + item.image"
                    height="100"
                    v-if="item.image"
                >
                <x-rapidez::no-image
                    class="h-[100px] w-[150px]"
                    v-else
                />
            </div>
            <div class="flex w-[150px] flex-1 flex-col items-start">
                <a
                    :href="item.url"
                    dusk="cart-item-name"
                >@{{ item.name }}</a>
                <div v-for="(optionValue, option) in item.options">
                    @{{ option }}: @{{ optionValue }}
                </div>
                <button
                    class="mt-1 text-xs text-ct-inactive hover:underline"
                    @click="remove(item)"
                    :dusk="'item-delete-' + index"
                >
                    @lang('rapidez-ct::frontend.cart.remove')
                </button>
            </div>
            <div class="flex items-center gap-10 sm:ml-auto font-medium max-sm:flex-1 justify-between">
                <div class="flex sm:w-[60px] flex-col gap-px text-sm">
                    <div v-if="item.specialPrice">
                        @{{ item.specialPrice | price }}
                    </div>
                    <div :class="{ 'line-through text-xs text-ct-inactive font-normal': item.specialPrice }">
                        @{{ item.price | price }}
                    </div>
                </div>
                <x-rapidez-ct::input.quantity />
                <div class="sm:w-[60px] text-sm">
                    @{{ item.total | price }}
                </div>
            </div>
        </div>
    </li>
</ul>
