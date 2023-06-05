@extends('rapidez::layouts.app')

@section('title', 'Cart')

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <checkout
        v-cloak
        v-slot="{ checkout, cart, hasItems, save, goToStep }"
        :set="checkout.step = Math.max(checkout.step, 2)"
    >
        <div class="container">
            <x-rapidez-ct::overview>
                <template v-if="checkout.step == 2 && hasItems">
                    @include('rapidez-ct::checkout.steps.credentials')
                </template>

                <template v-if="checkout.step == 3">
                    @include('rapidez-ct::checkout.steps.payment')
                </template>

                <template v-if="checkout.step == 4">
                    @include('rapidez-ct::checkout.steps.success')
                </template>

                <x-slot:sidebar>
                    @include('rapidez-ct::checkout.partials.sidebar.sidebar')
                </x-slot:sidebar>
            </x-rapidez-ct::overview>
        </div>
    </checkout>
@endsection
