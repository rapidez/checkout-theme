<x-rapidez-ct::sections>
    @unless (in_array('login', $checkoutSteps))
        <x-rapidez-ct::card.inactive>
            @include('rapidez-ct::checkout.partials.sections.login')
        </x-rapidez-ct::card.inactive>
    @endunless
    <x-rapidez-ct::card.inactive>
        @include('rapidez-ct::checkout.partials.sections.address')
    </x-rapidez-ct::card.inactive>
    @if (Rapidez::config('newsletter/general/active', 1))
        <x-rapidez-ct::card.inactive>
            @include('rapidez-ct::checkout.partials.sections.newsletter')
        </x-rapidez-ct::card.inactive>
    @endif
    <x-rapidez-ct::card.inactive>
        @include('rapidez-ct::checkout.partials.sections.shipping')
    </x-rapidez-ct::card.inactive>
</x-rapidez-ct::sections>