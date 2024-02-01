<toggler>
    <div slot-scope="{ isOpen, toggle }">
        <coupon v-show="isOpen" v-slot="{ cart, removeCoupon, couponCode, inputEvents, applyCoupon, submitError }">
            <form class="text-sm" @submit.prevent="applyCoupon">
                @include('rapidez-ct::cart.partials.coupon-field')
                <div v-if="cart.discount_name && cart.discount_amount < 0" class="text-ct-inactive mt-1 flex items-center gap-x-2">
                    <button v-on:click="removeCoupon">
                        <x-heroicon-s-x-mark class="h-4 w-4" />
                    </button>
                    @lang('Discount'): @{{ cart.discount_name }}
                </div>
                <div v-if="submitError" class="text-ct-error mt-1 italic">
                    @{{ submitError }}
                </div>
            </form>
        </coupon>
        <x-rapidez-ct::button.outline v-show="!isOpen" @click="toggle">
            @lang('Coupon code')
        </x-rapidez-ct::button.outline>
    </div>
</toggler>
