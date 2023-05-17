<section>
    <form id="credentials" v-on:submit.prevent="save(['credentials'], 2)">
        @include('rapidez-ct::checkout.partials.form', ['type' => 'shipping'])

        <div class="mt-9 pt-7 border-t-[2px] border-white" v-if="!checkout.hide_billing">
            @include('rapidez-ct::checkout.partials.form', ['type' => 'billing'])
        </div>
    </form>
</section>
