@extends('rapidez::layouts.app')

@section('title', 'Cart')

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <cart v-cloak>
        <div class="container" v-if="hasItems" slot-scope="{ cart, hasItems, changeQty, remove }">
            <div class="flex sm:flex-row flex-col flex-wrap sm:space-x-[35px]">
                <div class="flex-1">
                    @include('rapidez-ct::cart.partials.top-bar')
                    @include('rapidez-ct::cart.partials.products')
                    @include('rapidez-ct::cart.partials.bottom-bar')
                </div>
                <div class="sm:w-[370px]">
                    @include('rapidez-ct::cart.partials.sidebar')
                </div>
            </div>
        </div>
        <div class="container" v-else>
            @lang('You don\'t have anything in your cart.')
        </div>
    </cart>
@endsection
