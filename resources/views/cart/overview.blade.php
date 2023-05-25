@extends('rapidez::layouts.app')

@section('title', 'Cart')

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <cart v-cloak>
        <div class="container" v-if="hasItems" slot-scope="{ cart, hasItems, changeQty, remove }">
            <div class="flex max-md:flex-col text-sm text-primary flex-wrap gap-x-8">
                <div class="flex-1">
                    @include('rapidez-ct::cart.cart')
                </div>
                <x-rapidez-ct::sidebar>
                    @include('rapidez-ct::cart.partials.sidebar.sidebar')
                </x-rapidez-ct::sidebar>
            </div>
        </div>
        <div class="container" v-else>
            @lang('You don\'t have anything in your cart.')
        </div>
    </cart>
@endsection
