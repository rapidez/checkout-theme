@extends('rapidez::layouts.app')

@section('title', __('rapidez-ct::frontend.account.login'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::layout.two-column>
            <x-rapidez-ct::title>
                @lang('rapidez-ct::frontend.account.login')
            </x-rapidez-ct::title>
            <x-slot:columns>
                @include('rapidez-ct::account.partials.login')
                @include('rapidez-ct::account.partials.register')
            </x-slot:columns>
        </x-rapidez-ct::layout.two-column>
    </div>
@endsection
