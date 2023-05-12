@extends('rapidez::layouts.app')

@section('title', 'Cart')

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <div class="flex">
            <div class="w-2/3">
                @include('rapidez-ct::checkout.steps.credentials')
            </div>
            <div class="w-1/3">
                @include('rapidez-ct::checkout.partials.sidebar')
            </div>
        </div>
    </div>
@endsection
