@extends('rapidez-ct::account.partials.layout')

@section('title', __('New address'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <div class="relative w-full">
        <graphql
            query="{ customer { addresses { id firstname middlename lastname street city postcode country_code telephone company default_billing default_shipping } } }"
            check="data?.customer?.addresses.find(a => a.id == {{ request()->id }})"
        >
            <div v-if="data && data?.customer?.addresses" slot-scope="{ data }">
                <graphql-mutation
                    query="@include('rapidez::account.partials.queries.address-edit')"
                    :variables="data.customer.addresses.find(a => a.id == {{ request()->id }})"
                    redirect="/account/edit"
                >
                    @include('rapidez-ct::account.partials.address-form')
                </graphql-mutation>
            </div>
        </graphql>
    </div>
@endsection