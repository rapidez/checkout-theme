@extends('rapidez::layouts.app')

@section('title', 'Cart')

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <checkout
        v-cloak
        v-slot="{ checkout, cart, hasItems, save, goToStep }"
    >
        <div class="container">
            <div class="text-sm flex flex-wrap gap-x-8 text-primary max-md:flex-col">
                <div class="flex-1">
                    <template v-if="checkout.step == 1 && hasItems">
                        @include('rapidez-ct::checkout.steps.credentials')
                    </template>

                    <template v-if="checkout.step == 2">
                        @include('rapidez-ct::checkout.steps.payment')
                    </template>

                    <template v-if="checkout.step == 3">
                        @include('rapidez-ct::checkout.steps.success')
                    </template>
                </div>

                <x-rapidez-ct::sidebar>
                    @include('rapidez-ct::checkout.partials.sidebar.sidebar')
                </x-rapidez-ct::sidebar>
            </div>
        </div>
    </checkout>
@endsection
