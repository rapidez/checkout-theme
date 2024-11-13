@extends('rapidez-ct::account.partials.layout')

@section('title', __('Account settings'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <graphql query="@include('rapidez::account.partials.queries.overview')" :callback="sortOrdersCallback">
        <div v-if="data" slot-scope="{ data, runQuery }">
            <x-rapidez-ct::sections>
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::account.partials.sections.edit.addresses')
                </x-rapidez-ct::card.inactive>
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::account.partials.sections.edit.newsletter')
                </x-rapidez-ct::card.inactive>
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::account.partials.sections.edit.email')
                </x-rapidez-ct::card.inactive>
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::account.partials.sections.edit.password')
                </x-rapidez-ct::card.inactive>
            </x-rapidez-ct::sections>
            <x-rapidez-ct::toolbar>
                <x-rapidez-ct::button.outline :href="route('account.overview')">
                    @lang('Back to dashboard')
                </x-rapidez-ct::button.outline>
            </x-rapidez-ct::toolbar>
        </div>
    </graphql>
@endsection
