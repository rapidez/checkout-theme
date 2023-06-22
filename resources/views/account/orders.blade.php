@extends('rapidez-ct::account.partials.layout')

@section('title', __('rapidez-ct::frontend.account.dashboard.orders'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <graphql query="@include('rapidez::account.partials.queries.orders')" :callback="sortOrdersCallback">
        <template v-if="data" slot-scope="{ data }">
            @include('rapidez-ct::account.partials.orders')
        </template>
    </graphql>
@endsection
