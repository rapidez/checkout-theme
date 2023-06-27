<div class="flex w-20 overflow-hidden rounded border">
    <button
        class="flex-1 bg-ct-inactive-100 transition hover:bg-opacity-80"
        v-on:click="item.qty <= item.min_sale_qty ? item.qty = item.qty : item.qty = +item.qty - item.qty_increments;changeQty(item)"
    >-</button>
    <input
        class="h-10 w-2/5 border-none px-0 text-center text-sm [appearance:textfield] focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
        name="qty"
        type="number"
        {{ $attributes }}
        v-model="item.qty"
        v-on:change="changeQty(item)"
        v-bind:min="item.min_sale_qty > item.qty_increments ? item.min_sale_qty : item.qty_increments"
        v-bind:step="item.qty_increments"
    />
    <button
        class="flex-1 bg-ct-inactive-100 transition hover:bg-opacity-80"
        v-on:click="item.qty = +item.qty + item.qty_increments;changeQty(item)"
    >+</button>
</div>
