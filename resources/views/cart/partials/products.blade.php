<table class="my-5 w-full border-b">
    <thead class="bg-ct-inactive-100 mt-5 flex rounded md:table-header-group">
        <tr class="text-xs [&>*]:py-4 [&>*]:font-normal md:[&>*]:px-5">
            <th class="!pl-0 max-md:hidden"></th>
            <th>@lang('Product')</th>
            <th class="max-md:hidden">@lang('Price')</th>
            <th class="!text-center max-md:hidden">@lang('Amount')</th>
            <th class="max-md:hidden">@lang('Subtotal')</th>
        </tr>
    </thead>
    <tbody class="divide-y">
        <tr v-for="(item, itemId, index) in cart.items" class="flex flex-wrap gap-y-5 py-5 md:table-row md:[&>*]:p-5">
            <td class="h-24 w-40 !pl-0 max-md:flex max-md:w-1/2">
                <img v-if="item.image" class="object-contain" :alt="item.name" :src="'/storage/{{ config('rapidez.store') }}/resizes/200/magento/catalog/product' + item.image + '.webp'">
                <x-rapidez::no-image v-else />
            </td>
            <td class="flex max-md:w-1/2 max-md:w-full md:table-cell">
                <div class="flex flex-col items-start">
                    <a :href="item.url | url">
                        <div dusk="cart-item-name">@{{ item.name }}</div>
                        <div v-for="(optionValue, option) in item.options">
                            @{{ option }}: @{{ optionValue }}
                        </div>
                        <div v-for="option in cart?.items2?.find((item) => item.item_id == itemId).options.filter((option) => !['info_buyRequest', 'option_ids'].includes(option.code) && option.label)">
                            @{{ option.label }}: @{{ option.value.title || option.value }}
                        </div>
                    </a>
                    <button v-on:click="remove(item)" class="text-ct-inactive mt-1 text-xs hover:underline" :dusk="'item-delete-' + index">
                        @lang('Remove')
                    </button>
                </div>
            </td>
            <td class="flex items-center font-medium max-md:w-1/3 md:table-cell">
                <div v-if="item.specialPrice">
                    @{{ item.specialPrice | price }}
                </div>
                <div :class="{ 'line-through text-xs text-ct-inactive font-normal': item.specialPrice }">
                    @{{ item.price | price }}
                </div>
            </td>
            <td class="flex items-center font-medium max-md:w-1/3 md:table-cell">
                <x-rapidez-ct::input.quantity />
            </td>
            <td class="flex items-center justify-end text-right font-medium max-md:w-1/3 md:table-cell">
                @{{ item.total | price }}
            </td>
        </tr>
    </tbody>
</table>
