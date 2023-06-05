<x-rapidez-ct::title-progress-bar>
    @lang('Thank you for your order')
</x-rapidez-ct::title-progress-bar>

<x-rapidez-ct::sections class="[&>*]:!bg-ct-accent-100">
    @include('rapidez-ct::checkout.partials.sections.order-completed-note')
</x-rapidez-ct::sections>

<x-rapidez-ct::sections>

    <section>
        Hier moet de bezorg en factuur adres + gebruikte betaalmethode + gebruikte verzendmethode komen
    </section>
    <section>
        Hier komen de gekochte producten
    </section>
    <section>
        <x-rapidez-ct::title.lg>
            @lang('Newsletter')
        </x-rapidez-ct::title.lg>
        <x-rapidez-ct::newsletter class="mt-5" />
    </section>
    <section v-if="!$root.loggedIn">
        <x-rapidez-ct::title.lg>
            @lang('Create account')
        </x-rapidez-ct::title.lg>
        <x-rapidez-ct::input
            name="email"
            type="email"
            label="E-mailaddress"
            v-bind:value="email"
            disabled
        />
    </section>
</x-rapidez-ct::sections>
