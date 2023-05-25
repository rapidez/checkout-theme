<div class="bg-ct-white mb-3 rounded-lg border sm:w-80">
    <div class="p-3">
        <h3 class="text-lg font-medium leading-6 text-gray-900">
            @lang('Apply coupon code')
        </h3>
        <coupon v-slot="{ cart, removeCoupon, couponCode, inputEvents, applyCoupon }">
            <div>
                <form
                    class="mt-5 flex"
                    @submit.prevent="applyCoupon"
                >
                    <x-rapidez::input
                        name="couponCode"
                        :label="false"
                        placeholder="Coupon code"
                        v-on="inputEvents"
                        v-bind:value="couponCode"
                        v-bind:disabled="$root.loading"
                    />

                    <x-rapidez::button
                        class="ml-3 sm:text-sm"
                        type="submit"
                    >
                        @lang('Apply')
                    </x-rapidez::button>
                </form>

                <div
                    class="relative rounded-md"
                    v-if="cart.discount_name && cart.discount_amount < 0"
                >
                    <div class="flex items-center">
                        <button v-on:click="removeCoupon">
                            <x-heroicon-s-x class="text-black-400 h-4 w-4" />
                        </button>
                        @lang('Discount'): @{{ cart.discount_name }}
                    </div>
                </div>
            </div>
        </coupon>
    </div>
</div>
