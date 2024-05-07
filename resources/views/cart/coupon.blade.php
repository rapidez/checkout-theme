<toggler>
    <div slot-scope="{ isOpen, toggle }">
        <div v-if="isOpen" v-cloak class="text-sm">
            <x-rapidez-ct::coupon-field />
            <template v-if="cart.applied_coupons?.length" v-for="coupon in cart.applied_coupons" v-cloak>
                <graphql-mutation
                    :query="'mutation ($cart_id: String!) { removeCouponFromCart(input: { cart_id: $cart_id }) { cart { ' + config.queries.cart + ' } } }'"
                    :variables="{ cart_id: mask }"
                    :callback="updateCart"
                    :error-callback="checkResponseForExpiredCart"
                    v-slot="{ mutate }"
                >
                    <form v-on:submit.prevent="mutate" class="text-ct-inactive mt-1 flex items-center gap-x-2">
                        <button type="submit">
                            <x-heroicon-s-x-mark class="size-4 text-black-400"/>
                        </button>
                        @{{ coupon.code }}
                    </form>
                </graphql-mutation>
            </template>
        </div>
        <x-rapidez-ct::button.outline v-show="!isOpen" @click="toggle">
            @lang('Coupon code')
        </x-rapidez-ct::button.outline>
    </div>
</toggler>
