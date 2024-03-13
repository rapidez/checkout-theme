<td class="flex items-center font-medium max-md:w-1/3 md:table-cell">
    <div v-if="item.prices.specialPrice">
        @{{ item.prices.specialPrice | price }}
    </div>
    <div :class="{ 'line-through text-xs text-ct-inactive font-normal': item.prices.specialPrice }">
        @{{ item.prices.price_including_tax.value | price }}
    </div>
</td>
<td class="flex items-center font-medium max-md:w-1/3 md:table-cell *:mx-auto">
    <x-rapidez-ct::input.quantity/>
</td>
<td class="flex items-center justify-end text-right font-medium max-md:w-1/3 md:table-cell">
    @{{ item.prices.row_total_including_tax.value | price }}
</td>
