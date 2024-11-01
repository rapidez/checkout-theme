<x-rapidez-ct::layout class="mt-4 sm:mt-12">
    @include('rapidez-ct::cart.cart')
    <x-slot:sidebar>
        @include('rapidez-ct::cart.partials.sidebar.sidebar')
    </x-slot:sidebar>
</x-rapidez-ct::layout>
@include('rapidez-ct::cart.partials.crosssells')
