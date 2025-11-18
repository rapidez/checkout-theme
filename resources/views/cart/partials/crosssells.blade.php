<div v-if="cart.value.items.flatMap((item) => item.product.crosssell_products.map((crosssell) => crosssell.id)).length" class="mt-5">
    <x-rapidez::productlist
        value="cart.value.items.flatMap((item) => item.product.crosssell_products.map((crosssell) => crosssell.id))"
        title="Related products"
        field="entity_id"
    />
</div>
