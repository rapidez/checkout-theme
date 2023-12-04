<x-rapidez-ct::input.radio
    name="payment_method"
    v-bind:value="method.code"
    v-bind:dusk="'method-'+index"
    v-model="checkout.payment_method"
    required
>
    <div>@{{ method.title }}</div>
    <img
        class="max-h-10"
        v-bind:alt="method.code"
        v-bind:src="`/vendor/payment-icons/${method.code}.svg`"
        onerror="this.onerror=null; this.src='/vendor/payment-icons/creditcard.svg'"
    />
</x-rapidez-ct::input.radio>