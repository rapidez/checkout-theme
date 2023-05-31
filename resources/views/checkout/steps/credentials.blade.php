<x-rapidez-ct::title-progress-bar>
    @lang('Credentials')
</x-rapidez-ct::title-progress-bar>

<x-rapidez-ct::sections>
    @include('rapidez-ct::checkout.partials.sections.login')
    @include('rapidez-ct::checkout.partials.sections.address')
    @include('rapidez-ct::checkout.partials.sections.shipping')
</x-rapidez-ct::sections>

<div class="mt-5 flex flex-wrap justify-between gap-3">
    <x-rapidez-ct::button.outline href="/cart">
        @lang('Back to cart')
    </x-rapidez-ct::button.outline>
    <x-rapidez-ct::button.enhanced form="credentials">
        @lang('Next')
    </x-rapidez-ct::button.enhanced>
</div>
