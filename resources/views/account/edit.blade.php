@extends('rapidez-ct::account.partials.layout')

@section('title', __('rapidez-ct::frontend.account.dashboard.settings'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <graphql query="@include('rapidez::account.partials.queries.overview')" :callback="sortOrdersCallback">
        <div v-if="data" slot-scope="{ data }">
           <x-rapidez-ct::sections>
                @include('rapidez-ct::checkout.partials.sections.address')
                @include('rapidez-ct::components.newsletter')
                @include('rapidez-ct::account.partials.edit.password')
           </x-rapidez-ct::sections>
           <x-rapidez-ct::button.outline href="/account">
                @lang('rapidez-ct::frontend.account.dashboard.back')
           </x-rapidez-ct::button.outline>
        </div>
    </graphql>
@endsection
