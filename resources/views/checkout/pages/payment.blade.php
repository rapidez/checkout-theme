@extends('rapidez::layouts.app')

@section('title', __('Checkout'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::layout class="mt-8 sm:mt-14">
            <x-rapidez-ct::title-progress-bar :href="route('checkout', ['step' => 'credentials'])" :$checkoutSteps :$currentStep :$currentStepKey>
                @lang('Payment')
            </x-rapidez-ct::title-progress-bar>
            <form 
                class="contents"
                v-on:submit.prevent="(e) => {
                    submitFieldsets(e.target?.form ?? e.target)
                        .then((result) =>
                            window.app.$emit('checkout-payment-saved')
                            && window.app.$emit('placeOrder')
                        ).catch();
                }"
            >
                @include('rapidez::checkout.steps.payment_method')
            </form>
            <x-slot:sidebar>
                @include('rapidez-ct::checkout.partials.sidebar.sidebar')
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
    </div>
@endsection