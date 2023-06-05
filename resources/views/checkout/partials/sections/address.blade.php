<section>
    <form id="credentials" v-on:submit.prevent="save(['credentials'], 2)">
        @include('rapidez-ct::checkout.partials.shipping-billing-fields', ['type' => 'shipping'])

        <div class="mt-9 pt-7 border-t-2 border-white" v-if="!checkout.hide_billing">
            @include('rapidez-ct::checkout.partials.shipping-billing-fields', ['type' => 'billing'])
        </div>
    </form>
</section>
