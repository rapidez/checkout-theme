<checkout-success>
    <div
        slot-scope="{ order }"
        dusk="checkout-success"
    >
        <x-rapidez-ct::title-progress-bar>
            @lang('Thank you for your order')
        </x-rapidez-ct::title-progress-bar>
        <x-rapidez-ct::sections class="[&>*]:!bg-ct-accent/20">
            @include('rapidez-ct::checkout.partials.sections.success.order-completed-note')
        </x-rapidez-ct::sections>
        <x-rapidez-ct::sections>
            <section>
                @include('rapidez-ct::checkout.partials.sections.success.order-info')
            </section>
            <section>
                @include('rapidez-ct::checkout.partials.sections.success.products')
            </section>
            <section>
                @include('rapidez-ct::checkout.partials.sections.success.newsletter')
            </section>
            <section v-if="!$root.loggedIn">
                @include('rapidez-ct::checkout.partials.sections.success.create-account')
            </section>
        </x-rapidez-ct::sections>
    </div>
</checkout-success>
