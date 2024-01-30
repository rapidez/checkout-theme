@extends('rapidez::layouts.app')

@section('title', __('Checkout'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <checkout v-slot="{ checkout, cart, hasItems, save, goToStep }" :set="checkout.step = Math.max(checkout.step, 2)" v-cloak>
        <div class="container">
            @include('rapidez-ct::checkout.partials.layout')
        </div>
    </checkout>
@endsection
