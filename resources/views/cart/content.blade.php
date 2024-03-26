<x-rapidez-ct::layout>
    @include('rapidez-ct::cart.cart')
    <x-slot:sidebar>
        @include('rapidez-ct::cart.partials.sidebar.sidebar')
    </x-slot:sidebar>
</x-rapidez-ct::layout>
@include('rapidez-ct::cart.partials.crosssells')
