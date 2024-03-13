@extends('rapidez::layouts.app')

@section('title', __('Checkout'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <checkout v-slot="{ checkout, save, goToStep, forceAccount }" :set="checkout.step = Math.max(checkout.step, 2)" v-cloak>
        <div class="container">
            <x-rapidez-ct::layout class="mt-8 sm:mt-14">
                <template v-if="checkout.step == 2 && $root?.cart?.total_quantity">
                    @include('rapidez-ct::checkout.steps.credentials')
                </template>

                <template v-if="checkout.step == getCheckoutStep('payment')">
                    @include('rapidez-ct::checkout.steps.payment')
                </template>

                <template v-if="checkout.step == getCheckoutStep('success')">
                    @include('rapidez-ct::checkout.steps.success')
                </template>

                <x-slot:sidebar>
                    @include('rapidez-ct::checkout.partials.sidebar.sidebar')
                </x-slot:sidebar>
            </x-rapidez-ct::layout>
        </div>
    </checkout>
@endsection
