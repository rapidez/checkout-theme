<td class="flex items-center font-medium max-md:w-1/3 md:table-cell">
    <div>
        <template v-if="showTax">
            @{{ window.price(item.prices.price_including_tax.value) }}
        </template>
        <template v-else="">
            @{{ window.price(item.prices.price.value) }}
        </template>
    </div>
</td>
<td class="flex items-center font-medium max-md:w-1/3 md:table-cell *:mx-auto">
    <template v-if="item.is_available">
        <x-rapidez-ct::input.quantity/>
    </template>
</td>
<td class="flex items-center justify-end text-right font-medium max-md:w-1/3 md:table-cell">
    <template v-if="showTax">
        @{{ window.price(item.prices.row_total_including_tax.value) }}
    </template>
    <template v-else="">
        @{{ window.price(item.prices.row_total.value) }}
    </template>
</td>
