@extends('rapidez-ct::account.partials.layout')

@section('title', __('Account settings'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <graphql query="@include('rapidez::account.partials.queries.overview')" :callback="sortOrdersCallback">
        <div v-if="data" slot-scope="{ data, runQuery }">
           <x-rapidez-ct::sections>
                @include('rapidez-ct::account.partials.sections.edit.addresses')
                @include('rapidez-ct::account.partials.sections.edit.newsletter')
                @include('rapidez-ct::account.partials.sections.edit.password')
           </x-rapidez-ct::sections>
           <x-rapidez-ct::button.outline href="/account">
                @lang('Back to dashboard')
           </x-rapidez-ct::button.outline>
        </div>
    </graphql>
@endsection
