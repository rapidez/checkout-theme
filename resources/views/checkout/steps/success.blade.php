<x-rapidez-ct::title-progressbar>
    @lang('Thank you for your order')
</x-rapidez-ct::title-progressbar>

<x-rapidez-ct::sections class="[&>*]:!bg-ct-accent [&>*]:!bg-ct-opacity-20">
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
    </section>
    <section>
        <x-rapidez-ct::title.lg>
            @lang('Create account')
        </x-rapidez-ct::title.lg>
    </section>
</x-rapidez-ct::sections>
