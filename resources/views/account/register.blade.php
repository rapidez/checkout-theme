@extends('rapidez::layouts.app')

@section('title', __('Register'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::title class="mb-5">
            @lang('Register')
        </x-rapidez-ct::title>
        <x-rapidez-ct::layout>
            @include('rapidez-ct::account.partials.register-account')

            <x-rapidez-ct::toolbar>
                <x-rapidez::button.outline :href="route('account.login')">
                    @lang('Back to login')
                </x-rapidez::button.outline>
                <x-rapidez::button.secondary type="submit" form="register" loader>
                    @lang('Register')
                </x-rapidez::button.secondary>
            </x-rapidez-ct::toolbar>

            <x-slot:sidebar>
                @include('rapidez-ct::account.partials.account-features')
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
    </div>
@endsection
