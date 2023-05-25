<div class="mt-5 rounded bg-ct-inactive-100 py-4 text-14">
    <div class="flex w-full items-center gap-x-6 pr-6 text-13">
        <div class="w-0 sm:w-[150px]"></div>
        <div class="max-w-[268px] flex-1 sm:min-w-[150px]">@lang('Product')</div>
        <div class="ml-auto flex items-center gap-10 max-md:hidden">
            <div class="min-w-[60px]">@lang('Price')</div>
            <div class="w-[72px] text-center">@lang('Amount')</div>
            <div class="min-w-[60px]">@lang('Subtotal')</div>
        </div>
    </div>
</div>

<div
    class="flex border-b py-5"
    v-for="(item, productId, index) in cart.items"
>
    <div class="flex w-full flex-wrap gap-y-3 gap-x-6 pr-6 text-14 md:items-center">
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
        <div class="flex min-w-[150px] max-w-[268px] flex-1 flex-col items-start">
            <a
                :href="item.url"
                dusk="cart-item-name"
            >@{{ item.name }}</a>
            <div v-for="(optionValue, option) in item.options">
                @{{ option }}: @{{ optionValue }}
            </div>
            <button
                class="mt-1 text-13 text-ct-inactive hover:underline"
                @click="remove(item)"
                :dusk="'item-delete-' + index"
            >
                @lang('Remove')
            </button>
        </div>
        <div class="flex items-center gap-10 sm:ml-auto">
            <div class="flex min-w-[60px] flex-col gap-px text-14 font-medium">
                <div v-if="item.specialPrice">
                    @{{ item.specialPrice | price }}
                </div>
                <div :class="{ 'line-through text-13 text-ct-inactive font-normal': item.specialPrice }">
                    @{{ item.price | price }}
                </div>
            </div>
            <x-rapidez-ct::input.select-number
                name="qty"
                v-model="item.qty"
                v-on:change="changeQty(item)"
            >
                <option
                    v-for="i in 10"
                    v-bind:value="i"
                    v-if="i >= item.min_sale_qty"
                >
                    @{{ i }}
                </option>
            </x-rapidez-ct::input.select-number>
            <div class="min-w-[60px] text-14 font-medium">
                @{{ item.total | price }}
            </div iv>
        </div>
    </div>
</div>
