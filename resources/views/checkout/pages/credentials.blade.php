@extends('rapidez::layouts.app')

@section('title', __('Checkout'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::layout class="lg:items-end">
            <x-rapidez-ct::title-progress-bar :href="route('cart')" :$checkoutSteps :$currentStep :$currentStepKey>
                @lang('Credentials')
            </x-rapidez-ct::title-progress-bar>
            <x-slot:sidebar>
                <a href="{{ url('/') }}" class="*:h-auto *:max-h-20 *:w-full *:object-contain max-lg:hidden">
                    <x-rapidez-ct::logo />
                </a>
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
        <x-rapidez-ct::layout class="mt-5">
            <form
                class="contents"
                v-on:submit.prevent="(e) => {
                    submitPartials(e.target?.form ?? e.target)
                        .then((result) =>
                            window.app.$emit('checkout-credentials-saved')
                            && window.Turbo.visit(window.url('{{ route('checkout', ['step' => 'payment']) }}'))
                        ).catch();
                }"
            >
                @include('rapidez-ct::checkout.steps.credentials')
                <x-rapidez-ct::toolbar>
                    <x-rapidez-ct::button.outline :href="route('cart')">
                        @lang('Back to cart')
                    </x-rapidez-ct::button.outline>

                    <x-rapidez-ct::button.accent loader>
                        @lang('Next')
                    </x-rapidez-ct::button.accent>
                </x-rapidez-ct::toolbar>
            </form>
            <x-slot:sidebar>
                @include('rapidez-ct::checkout.partials.sidebar.sidebar')
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
    </div>
@endsection