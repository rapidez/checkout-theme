@extends('rapidez::layouts.app')

@section('title', __('Checkout'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::layout class="lg:items-end">
            <x-rapidez-ct::title-progress-bar :href="route('cart')" :$checkoutSteps :$currentStep :$currentStepKey>
                @lang('Login')
            </x-rapidez-ct::title-progress-bar>
            <x-slot:sidebar class="max-lg:hidden">
                <a href="{{ url('/') }}" class="*:h-auto *:max-h-20 *:w-full *:object-contain">
                    <x-rapidez-ct::logo />
                </a>
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
        <x-rapidez-ct::layout class="mt-5">
            <form
                v-if="hasCart"
                v-on:submit.prevent="(e) => {
                    submitPartials(e.target?.form ?? e.target)
                        .then((result) =>
                            window.Turbo.visit(window.url('{{ route('checkout', ['step' => 'credentials']) }}'))
                        ).catch();
                }"
                v-cloak
            >
                @include('rapidez-ct::checkout.steps.login')

                <x-rapidez-ct::toolbar>
                    <x-rapidez::button.outline :href="route('cart')">
                        @lang('Back to cart')
                    </x-rapidez::button.outline>

                    <x-rapidez::button.conversion loader type="submit" dusk="continue" class="mt-3">
                        @lang('Next')
                    </x-rapidez::button.conversion>
                </x-rapidez-ct::toolbar>
            </form>
            <x-slot:sidebar>
                @include('rapidez-ct::checkout.partials.sidebar.sidebar')
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
    </div>
@endsection
