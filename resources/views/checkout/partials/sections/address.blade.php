<section>
    @include('rapidez-ct::checkout.partials.shipping-billing-fields', ['type' => 'shipping'])

    <div class="mt-9 pt-7 border-t-[2px] border-white" v-if="!checkout.hide_billing">
        @include('rapidez-ct::checkout.partials.shipping-billing-fields', ['type' => 'billing'])
    </div>
</section>
