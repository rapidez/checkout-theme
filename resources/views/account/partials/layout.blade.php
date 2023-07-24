@extends('rapidez::layouts.app')

@section('title', __('Account'))
@php
    $showNavigation = !request()->is('account');
    $showOrderTotal = request()->is('account/order/*');
    $backurl = match (true) {
        request()->is('account') => null,
        request()->is('account/order/*') => '/account/orders',
        default => '/account',
    };
@endphp

@section('content')
    <div v-cloak class="container">
        <template v-if="loggedIn">
            <x-rapidez-ct::layout>
                <x-rapidez-ct::toolbar>
                    <x-rapidez-ct::title :href="$backurl">
                        @yield('title')
                    </x-rapidez-ct::title>
                    @yield('button')
                </x-rapidez-ct::toolbar>
                @yield('account-content')
                <x-slot:sidebar>
                    @includeUnless($showNavigation, 'rapidez-ct::account.partials.default-addresses')
                    @includeWhen($showNavigation, 'rapidez-ct::account.partials.account-navigation')
                    @includeWhen($showOrderTotal, 'rapidez-ct::account.partials.order.order-total')
                </x-slot:sidebar>
            </x-rapidez-ct::layout>
        </template>

        <template v-else-if="!$root.loading">
            <x-rapidez-ct::layout.two-column>
                <x-rapidez-ct::title>
                    @lang('Login')
                </x-rapidez-ct::title>
                <x-slot:columns>
                    @include('rapidez-ct::account.partials.login', ['redirect' => false])
                    @include('rapidez-ct::account.partials.register')
                </x-slot:columns>
            </x-rapidez-ct::layout.two-column>
        </template>
    </div>
@endsection
