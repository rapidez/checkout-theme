@extends('rapidez::layouts.app')

@section('title', 'Cart')

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <cart v-cloak>
        <div
            class="container"
            v-if="hasItems"
            slot-scope="{ cart, hasItems, changeQty, remove }"
        >
            <x-rapidez-ct::layout class="!mt-0">
                @include('rapidez-ct::cart.cart')
                <x-slot:sidebar>
                    @include('rapidez-ct::cart.partials.sidebar.sidebar')
                </x-slot:sidebar>
            </x-rapidez-ct::layout>
        </div>
        <div
            class="container"
            v-else
        >
            <p>@lang('You don\'t have anything in your cart.')</p>
            <x-rapidez-ct::button.outline class="mt-3" href="/">
                @lang('Return to home')
            </x-rapidez-ct::button.outline>
        </div>
    </cart>
@endsection
