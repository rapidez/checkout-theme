@extends('rapidez::layouts.app')

@section('title', __('Cart'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <graphql v-if="mask"
        :query="'query getCart($cart_id: String!) { cart (cart_id: $cart_id) { ...cart } } ' + config.fragments.cart"
        :variables="{ cart_id: mask }"
        :callback="updateCart"
        :error-callback="checkResponseForExpiredCart"
    >
    </graphql>
    <div v-if="hasCart" v-cloak class="container">
        @include('rapidez-ct::cart.content')
    </div>
    <div v-else class="container">
        <p>@lang("You don't have anything in your cart.")</p>
        <x-rapidez::button.outline class="mt-3" href="/">
            @lang('Return to home')
        </x-rapidez::button.outline>
    </div>
@endsection
