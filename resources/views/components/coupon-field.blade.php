<graphql-mutation
    :query="'mutation ($cart_id: String!, $coupon_code: String!) { applyCouponToCart(input: { cart_id: $cart_id, coupon_code: $coupon_code }) { cart { ...cart } } } ' + config.fragments.cart"
    :variables="{ cart_id: mask.value, coupon_code: '' }"
    :notify="{ message: config.translations.cart.coupon.applied }"
    :clear="true"
    :watch="false"
    :callback="updateCart"
    v-slot="{ mutate, variables, running }"
>
    <form v-on:submit.prevent="mutate" class="flex w-full gap-x-3">
        <x-rapidez::input
            class="w-60"
            name="couponCode"
            :placeholder="__('Coupon code')"
            v-model="variables.coupon_code"
            v-bind:disabled="running"
            required
        />
        <x-rapidez::button.outline type="submit">
            @lang('Apply')
        </x-rapidez::button.outline>
    </form>
</graphql-mutation>
