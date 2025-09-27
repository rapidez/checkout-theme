@extends('rapidez::layouts.app')

@section('title', __('Login'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::layout.two-column>
            <x-rapidez-ct::title tag="h1">
                @lang('Login')
            </x-rapidez-ct::title>
            <x-slot:columns>
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::account.partials.login')
                </x-rapidez-ct::card.inactive>
                <x-rapidez-ct::card class="md:w-auto">
                    @include('rapidez-ct::account.partials.register')
                </x-rapidez-ct::card>
            </x-slot:columns>
        </x-rapidez-ct::layout.two-column>
    </div>
@endsection
