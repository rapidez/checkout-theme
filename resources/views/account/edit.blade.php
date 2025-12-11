@extends('rapidez-ct::account.partials.layout')

@section('title', __('Account settings'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <graphql query="@include('rapidez::account.partials.queries.overview')" :callback="sortOrdersCallback" v-slot="{ data, runQuery }">
        <div v-if="data">
            <x-rapidez-ct::sections>
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::account.partials.sections.edit.addresses')
                </x-rapidez-ct::card.inactive>
                @if (Rapidez::config('newsletter/general/active', 1))
                    <x-rapidez-ct::card.inactive>
                        @include('rapidez-ct::account.partials.sections.edit.newsletter')
                    </x-rapidez-ct::card.inactive>
                @endif
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::account.partials.sections.edit.email')
                </x-rapidez-ct::card.inactive>
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::account.partials.sections.edit.name')
                </x-rapidez-ct::card.inactive>
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::account.partials.sections.edit.password')
                </x-rapidez-ct::card.inactive>
            </x-rapidez-ct::sections>
            <x-rapidez-ct::toolbar>
                <x-rapidez::button.outline :href="route('account.overview')">
                    @lang('Back to dashboard')
                </x-rapidez::button.outline>
            </x-rapidez-ct::toolbar>
        </div>
    </graphql>
@endsection
