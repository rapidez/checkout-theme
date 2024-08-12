<form id="payment" class="flex flex-col gap-2" v-on:submit.prevent="save(['payment_method'], 4)">
    <div v-for="(method, index) in checkout.payment_methods">
        @include('rapidez-ct::checkout.partials.sections.payment.payment-methods')
    </div>
    @include('rapidez-ct::checkout.partials.sections.payment.checkout-agreements')
</form>
