@extends('rapidez::layouts.app')

@section('title', __('Register'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::layout>
            <x-rapidez-ct::title :href="route('account.login')">
                @lang('Register')
            </x-rapidez-ct::title>

            
            @include('rapidez-ct::account.partials.register-account')

            <x-rapidez-ct::toolbar>
                <x-rapidez-ct::button.outline :href="route('account.login')">
                    @lang('Back to login')
                </x-rapidez-ct::button.outline>
                <x-rapidez-ct::button.accent type="submit" form="register" loader>
                    @lang('Register')
                </x-rapidez-ct::button.accent>
            </x-rapidez-ct::toolbar>

            <x-slot:sidebar>
                @include('rapidez-ct::account.partials.account-features')
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
    </div>
@endsection
