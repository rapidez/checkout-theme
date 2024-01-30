<x-rapidez-ct::section-title :href="route('cart')">
    @lang('Credentials')
</x-rapidez-ct::section-title>

<x-rapidez-ct::checkout.partials.credentials-form>
    <x-rapidez-ct::sections>
        @include('rapidez-ct::checkout.partials.sections.login')
        @include('rapidez-ct::checkout.partials.sections.address')
        @include('rapidez-ct::checkout.partials.sections.newsletter')
        @include('rapidez-ct::checkout.partials.sections.shipping')
    </x-rapidez-ct::sections>
</x-rapidez-ct::checkout.partials.credentials-form>

<x-rapidez-ct::toolbar>
    @include('rapidez-ct::checkout.partials.buttons.credentials')
</x-rapidez-ct::toolbar>
