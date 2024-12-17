@extends('rapidez::layouts.app')

@section('title', __('Forgot your password?'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::layout.two-column>
            <x-rapidez-ct::title>
                @lang('Login')
            </x-rapidez-ct::title>
            <x-slot:columns>
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::account.partials.forgotpassword')
                </x-rapidez-ct::card.inactive>
                <x-rapidez-ct::card class="md:w-auto">
                    @include('rapidez-ct::account.partials.register')
                </x-rapidez-ct::card>
            </x-slot:columns>
        </x-rapidez-ct::layout.two-column>
    </div>
@endsection
