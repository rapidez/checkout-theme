@extends('rapidez::layouts.app')

@section('title', __('Checkout'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::layout class="lg:items-end">
            <x-rapidez-ct::title-progress-bar :aria-label="__('Back to credentials')" :href="route('checkout', ['step' => 'credentials'])" :$checkoutSteps :$currentStep :$currentStepKey>
                @lang('Payment')
            </x-rapidez-ct::title-progress-bar>
            <x-slot:sidebar class="max-lg:hidden">
                <a href="{{ url('/') }}" aria-label="@lang('Home')" class="*:h-auto *:max-h-20 *:w-full *:object-contain">
                    <x-rapidez-ct::logo />
                </a>
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
        <x-rapidez-ct::layout class="mt-5" v-cloak>
            <form
                class="contents"
                v-on:submit.prevent="(e) => {
                    window.app.config.globalProperties.submitPartials(e.target?.form ?? e.target)
                        .then((result) =>
                            window.$emit('checkout-payment-saved')
                            && window.$emit('placeOrder')
                        ).catch();
                }"
            >
                @include('rapidez-ct::checkout.steps.payment-method')
            </form>
            <x-slot:sidebar>
                @include('rapidez-ct::checkout.partials.sidebar.sidebar')
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
    </div>
@endsection
