<div class="flex items-center justify-between">
    <x-rapidez-ct::title>
        @lang('Cart')
    </x-rapidez-ct::title>
    <x-rapidez-ct::progress-bar />
</div>

@include('rapidez-ct::cart.partials.products')
@include('rapidez-ct::cart.partials.bottom-bar')
