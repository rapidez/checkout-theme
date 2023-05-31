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
            <x-rapidez-ct::overview>
                <x-slot:main>
                    @include('rapidez-ct::cart.cart')
                </x-slot:main>
                <x-slot:sidebar>
                    @include('rapidez-ct::cart.partials.sidebar.sidebar')
                </x-slot:sidebar>
            </x-rapidez-ct::overview>
        </div>
        <div
            class="container"
            v-else
        >
            @lang('You don\'t have anything in your cart.')
        </div>
    </cart>
@endsection
