@extends('rapidez::layouts.app')

@section('title', __('Checkout'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::title-progress-bar :href="route('cart')" :$checkoutSteps :$currentStep :$currentStepKey>
            @lang('Credentials')
        </x-rapidez-ct::title-progress-bar>

        <form
            v-if="hasCart"
            v-on:submit.prevent="(e) => {
                submitPartials(e.target?.form ?? e.target)
                    .then((result) =>
                        window.Turbo.visit(window.url('{{ route('checkout', ['step' => 'credentials']) }}'))
                    ).catch();
            }"
            class="max-w-md mx-auto"
            v-cloak
        >
            @include('rapidez-ct::checkout.steps.login')

            <x-rapidez-ct::button.accent loader type="submit" dusk="continue" class="mt-3">
                @lang('Next')
            </x-rapidez-ct::button.accent>
        </form>
    </div>
@endsection
