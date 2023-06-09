@extends('rapidez::layouts.app')

@section('title', __('Account'))

@section('content')
    <div class="container" v-cloak>
        <template v-if="$root.user?.id">
            <x-rapidez-ct::layout>
                <x-rapidez-ct::title>
                    @yield('title')
                </x-rapidez-ct::title>
                @yield('account-content')
                <x-slot:sidebar>
                    @include('rapidez-ct::account.partials.account-navigation')
                </x-slot:sidebar>
            </x-rapidez-ct::layout>
        </template>

        <template v-else>
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
