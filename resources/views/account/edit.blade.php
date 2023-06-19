@extends('rapidez-ct::account.partials.layout')

@section('title', __('Account settings'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <graphql
        query="@include('rapidez::account.partials.queries.overview')"
        :callback="sortOrdersCallback"
    >
        <div
            v-if="data"
            slot-scope="{ data }"
        >
            <x-rapidez-ct::sections>
                @include('rapidez-ct::checkout.partials.sections.address')
                @include('rapidez-ct::components.newsletter')
                @include('rapidez-ct::account.partials.edit.password')
            </x-rapidez-ct::sections>
            <x-rapidez-ct::toolbar>
                <x-rapidez-ct::button.outline href="/account">
                    @lang('Back to dashboard')
                </x-rapidez-ct::button.outline>
            </x-rapidez-ct::toolbar>
        </div>
    </graphql>
@endsection
