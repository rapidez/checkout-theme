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
            <p>@lang('rapidez-ct::frontend.cart.empty')</p>
            <x-rapidez-ct::button.outline class="mt-3">
                @lang('rapidez-ct::frontend.cart.back')
            </x-rapidez-ct::button.outline>
        </div>
    </cart>
@endsection
