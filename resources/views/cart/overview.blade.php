@extends('rapidez::layouts.app')

@section('title', __('Cart'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <graphql v-if="mask"
        :query="'query getCart($cart_id: String!) { cart (cart_id: $cart_id) { ' + config.queries.cart + ' } }'"
        :variables="{ cart_id: mask }" 
        :callback="updateCart" 
        :error-callback="checkResponseForExpiredCart"
    >
    </graphql>
    <div v-if="hasCart" v-cloak class="container">
        <x-rapidez-ct::layout class="!mt-0">
            @include('rapidez-ct::cart.cart')
            <x-slot:sidebar>
                @include('rapidez-ct::cart.partials.sidebar.sidebar')
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
        @include('rapidez-ct::cart.partials.crosssells')
    </div>
    <div v-else class="container">
        <p>@lang("You don't have anything in your cart.")</p>
        <x-rapidez-ct::button.outline class="mt-3" href="/">
            @lang('Return to home')
        </x-rapidez-ct::button.outline>
    </div>
@endsection
