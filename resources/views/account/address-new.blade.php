@extends('rapidez-ct::account.partials.layout')

@section('title', __('New address'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <x-rapidez-ct::sections>
        <graphql-mutation
            query="@include('rapidez::account.partials.queries.address-create')"
            :variables="{ street: [] }"
            :watch="false"
            :callback="refreshUserInfoCallback"
            redirect="{{ route('account.addresses') }}"
        >
            @include('rapidez-ct::account.partials.address-form', ['region' => 'region.region_id'])
        </graphql-mutation>
    </x-rapidez-ct::sections>
@endsection
