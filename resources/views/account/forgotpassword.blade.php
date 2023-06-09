@extends('rapidez::layouts.app')

@section('title', __('Forgot password'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::layout.two-column>
            <x-rapidez-ct::title>
                @lang('Login')
            </x-rapidez-ct::title>
            <x-slot:columns>
                @include('rapidez-ct::account.partials.forgotpassword')
                @include('rapidez-ct::account.partials.register')
            </x-slot:columns>
        </x-rapidez-ct::layout.two-column>
    </div>
@endsection
