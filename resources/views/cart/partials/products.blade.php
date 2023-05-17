<div class="bg-inactive-100 rounded p-4 text-sm mt-5">
    <span>@lang('Product')</span>
</div>
<div class="flex flex-wrap border-b py-5" v-for="(item, productId, index) in cart.items">
    <div class="flex flex-wrap items-center text-sm">
        <div class="flex items-center justify-center w-[150px] h-[100px]">
            <img :alt="item.name" :src="'/storage/resizes/80x80/magento/catalog/product' + item.image" height="100" class="max-w-[150px] max-h-[100px]">
        </div>
        <div class="flex flex-col items-start ml-6">
            <a :href="item.url" dusk="cart-item-name">@{{ item.name }}</a>
            <div v-for="(optionValue, option) in item.options">
                @{{ option }}: @{{ optionValue }}
            </div>
            <button @click="remove(item)" :dusk="'item-delete-'+index">
                @lang('Remove')
            </button>
        </div>
        <div class="font-medium">
            @{{ item.price | price }}
        </div>
        <div class="inline-flex">
            <x-rapidez::input
                :label="false"
                class="w-[50px]"
                type="number"
                name="qty"
                v-model="item.qty"
                v-bind:dusk="'qty-'+index"
                ::min="item.min_sale_qty > item.qty_increments ? item.min_sale_qty : item.qty_increments"
                ::step="item.qty_increments"
            />
            <x-rapidez::button
                class="ml-1"
                :title="__('Update')"
                v-on:click="changeQty(item)"
                v-bind:dusk="'item-update-'+index"
            >
                <x-heroicon-s-refresh class="w-4 h-4"/>
            </x-rapidez::button>
        </div>
        <div class="font-medium">
            @{{ item.total | price }}
        </div>
    </div>
</div>
