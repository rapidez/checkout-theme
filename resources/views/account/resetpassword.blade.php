@extends('rapidez::layouts.app')

@section('title', __('Reset password'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::layout.two-column>
            <x-rapidez-ct::title tag="h1">
                @lang('Reset password')
            </x-rapidez-ct::title>
            <x-slot:columns>
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::account.partials.resetpassword')
                </x-rapidez-ct::card.inactive>
                <x-rapidez-ct::card class="md:w-auto">
                    @include('rapidez-ct::account.partials.register')
                </x-rapidez-ct::card>
            </x-slot:columns>
        </x-rapidez-ct::layout.two-column>
    </div>
@endsection
