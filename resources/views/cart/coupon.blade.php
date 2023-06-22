<toggler>
    <div slot-scope="{ isOpen, toggle }">
        <coupon
            v-show="isOpen"
            v-slot="{ cart, removeCoupon, couponCode, inputEvents, applyCoupon, submitError }"
        >
            <form
                class="text-sm"
                @submit.prevent="applyCoupon"
            >
                <div class="flex w-full flex-row gap-x-3">
                    <x-rapidez-ct::input
                        class="text-ct-primary h-full"
                        name="couponCode"
                        :placeholder="__('rapidez-ct::frontend.cart.coupon.placeholder') . '...'"
                        v-on="inputEvents"
                        v-bind:value="couponCode"
                        v-bind:disabled="$root.loading"
                    />
                    <x-rapidez-ct::button.outline type="submit">@lang('rapidez-ct::frontend.cart.coupon.apply')</x-rapidez-ct::button.outline>
                </div>
                <div
                    class="text-ct-inactive mt-1 flex items-center gap-x-2"
                    v-if="cart.discount_name && cart.discount_amount < 0"
                >
                    <button v-on:click="removeCoupon">
                        <x-heroicon-s-x class="h-4 w-4" />
                    </button>
                    @lang('rapidez-ct::frontend.discount'): @{{ cart.discount_name }}
                </div>
                <div
                    class="text-ct-error mt-1 italic"
                    v-if="submitError"
                >
                    @{{ submitError }}
                </div>
            </form>
        </coupon>
        <x-rapidez-ct::button.outline
            v-show="!isOpen"
            @click="toggle"
        >
            @lang('rapidez-ct::frontend.cart.coupon.code')
        </x-rapidez-ct::button.outline>
    </div>
</toggler>
