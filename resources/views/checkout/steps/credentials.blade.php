<div class="flex justify-between items-baseline">
    <x-rapidez-ct::title>
        @lang('Credentials')
    </x-rapidez-ct::title>
    <x-rapidez-ct::progress-bar />
</div>

<x-rapidez-ct::sections>
    @include('rapidez-ct::checkout.partials.sections.login')
    @include('rapidez-ct::checkout.partials.sections.address')
    @include('rapidez-ct::checkout.partials.sections.shipping')
</x-rapidez-ct::sections>

<x-rapidez-ct::button.enhanced form="credentials">
    @lang('Next')
</x-rapidez-ct::button.enhanced>
