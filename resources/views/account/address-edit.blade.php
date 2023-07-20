@extends('rapidez-ct::account.partials.layout')

@section('title', __('New address'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <x-rapidez-ct::sections>
        <graphql
            query="{ customer { addresses { id firstname middlename lastname street city postcode country_code telephone company default_billing default_shipping } } }"
            check="data?.customer?.addresses.find(a => a.id == {{ request()->id }})"
            redirect="{{ route('account.edit') }}"
        >
            <div v-if="data && data?.customer?.addresses" slot-scope="{ data }">
                <graphql-mutation
                    query="@include('rapidez::account.partials.queries.address-edit')"
                    :variables="data.customer.addresses.find(a => a.id == {{ request()->id }})"
                    :notify="{ 'message': '@lang('Address changed successfully')' }"
                    redirect="{{ route('account.edit') }}"
                >
                    @include('rapidez-ct::account.partials.address-form')
                </graphql-mutation>
            </div>
        </graphql>
    </x-rapidez-ct::sections>
@endsection
