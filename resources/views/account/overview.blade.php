@extends('rapidez-ct::account.partials.layout')

@section('title', __('rapidez-ct::frontend.account.dashboard.overview'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <x-rapidez-ct::sections>
        <x-rapidez-ct::card.inactive class="flex flex-col gap-3">
            @foreach (config('rapidez-checkout-theme.account.navigation') as $key => $item)
                @includeFirst(['rapidez-ct::components.dashboard.item.' . $key, 'rapidez-ct::components.dashboard.item.index'])
            @endforeach
        </x-rapidez-ct::card.inactive>
    </x-rapidez-ct::sections>
@endsection
