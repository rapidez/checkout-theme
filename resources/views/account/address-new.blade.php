@extends('rapidez-ct::account.partials.layout')

@section('title', __('New address'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <div class="relative w-full">
        <graphql-mutation
            query="@include('rapidez::account.partials.queries.address-create')"
            :variables="{ street: [] }"
            :watch="false"
            redirect="/account/edit"
        >
            @include('rapidez-ct::account.partials.address-form')
        </graphql-mutation>
    </div>
@endsection