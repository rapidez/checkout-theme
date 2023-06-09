@extends('rapidez::layouts.app')

@section('title', __('Login'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::layout.two-column>
            <x-rapidez-ct::title>
                @lang('Login')
            </x-rapidez-ct::title>
            <x-slot:columns>
                @include('rapidez-ct::account.partials.login')
                @include('rapidez-ct::account.partials.register')
            </x-slot:columns>
        </x-rapidez-ct::layout.two-column>
    </div>
@endsection
