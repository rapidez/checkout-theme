@extends('rapidez-ct::account.partials.layout')

@section('title', __('Edit address'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <x-rapidez-ct::sections>
        <graphql
            query="{ customer { addresses { id firstname middlename lastname street city postcode country_code region { region_id } telephone company vat_id default_billing default_shipping } } }"
            :check="(data) => data.customer?.addresses.find(a => a.id == {{ request()->id }})"
            redirect="{{ route('account.edit') }}"
            v-slot="{ data }"
        >
            <div v-if="data && data?.customer?.addresses">
                <graphql-mutation
                    query="@include('rapidez::account.partials.queries.address-edit')"
                    :variables="data.customer.addresses.find(a => a.id == {{ request()->id }})"
                    :callback="refreshUserInfoCallback"
                    redirect="{{ route('account.addresses') }}"
                    v-slot="{ mutate, variables }"
                >
                    @include('rapidez-ct::account.partials.address-form', ['region' => 'region.region_id'])
                </graphql-mutation>
            </div>
        </graphql>
    </x-rapidez-ct::sections>
@endsection
