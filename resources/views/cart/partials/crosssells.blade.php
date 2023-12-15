<div v-if="cart?.cross_sells?.length" class="mt-5">
    <x-rapidez::productlist value="cart.cross_sells" title="Related products" field="entity_id"/>
</div>
