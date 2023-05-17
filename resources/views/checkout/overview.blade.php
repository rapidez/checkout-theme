@extends('rapidez::layouts.app')

@section('title', 'Cart')

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <checkout v-cloak v-slot="{ checkout, cart, hasItems, save, goToStep }">
        <div class="container">
            <div class="flex flex-wrap space-x-[35px]">
                <div class="flex-1">
                    <div v-if="checkout.step == 1 && hasItems">
                        @include('rapidez-ct::checkout.steps.credentials')
                    </div>

                    <div v-if="checkout.step == 2">
                        @include('rapidez-ct::checkout.steps.payment')
                    </div>
                </div>
                <div class="w-full lg:w-[370px]">
                    @include('rapidez-ct::checkout.partials.sidebar')
                </div>
            </div>
        </div>
    </checkout>
@endsection
