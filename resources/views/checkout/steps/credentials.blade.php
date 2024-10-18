<x-rapidez-ct::sections>
    @includeWhen(!in_array('login', $checkoutSteps), 'rapidez-ct::checkout.partials.sections.login')
    @include('rapidez-ct::checkout.partials.sections.address')
    @include('rapidez-ct::checkout.partials.sections.newsletter')
    @include('rapidez-ct::checkout.partials.sections.shipping')
</x-rapidez-ct::sections>