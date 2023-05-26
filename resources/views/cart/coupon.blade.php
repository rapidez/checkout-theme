<toggler>
    <div slot-scope="{ isOpen, toggle }">
        <div
            class="w-full sm:w-auto"
            v-show="isOpen"
        >
            <coupon v-slot="{ cart, removeCoupon, couponCode, inputEvents, applyCoupon, submitError }">
                <form @submit.prevent="applyCoupon">
                    <div class="flex w-full flex-row space-x-[10px]">
                        <x-rapidez-ct::input
                            class="h-full text-ct-primary"
                            name="couponCode"
                            :placeholder="__('Enter code') . '...'"
                            v-on="inputEvents"
                            v-bind:value="couponCode"
                            v-bind:disabled="$root.loading"
                        ></x-rapidez-ct::input>
                        <x-rapidez-ct::button.outline type="submit">@lang('Apply')</x-rapidez-ct::button.outline>
                    </div>
                    <div class="mt-1 flex max-w-[360px] flex-col text-sm">
                        <div
                            class="flex items-center gap-x-2 text-ct-inactive"
                            v-if="cart.discount_name && cart.discount_amount < 0"
                        >
                            <button v-on:click="removeCoupon">
                                <x-heroicon-s-x class="h-4 w-4" />
                            </button>
                            @lang('Discount'): @{{ cart.discount_name }}
                        </div>
                        <div
                            class="mt-1 italic text-ct-error"
                            v-if="submitError"
                        >
                            @{{ submitError }}
                        </div>
                    </div>
                </form>
            </coupon>
        </div>
        <x-rapidez-ct::button.outline
            v-show="!isOpen"
            @click="toggle"
        >
            @lang('Coupon code')
        </x-rapidez-ct::button.outline>
    </div>
</toggler>
