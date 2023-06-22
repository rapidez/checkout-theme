@extends('rapidez-ct::account.partials.layout')

@section('title', __('rapidez-ct::frontend.account.dashboard.overview'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('account-content')
    <x-rapidez-ct::sections>
        <x-rapidez-ct::card.inactive class="space-y-3">
            <div class="border h-20 flex flex-wrap items-center bg-white px-8 py-4 space-x-6 rounded">
                <x-heroicon-o-shopping-bag class="w-6"/>
                <div class="flex flex-col space-y-1">
                    <strong class="font-medium">
                        @lang('rapidez-ct::frontend.account.dashboard.orders')
                    </strong>
                    <p class="text-inactive">
                        @lang('Herhaalbestelling plaatsen / Bestellingen bekijken')
                    </p>
                </div>
            </div>
            <div class="border h-20 flex flex-wrap items-center bg-white px-8 py-4 space-x-6 rounded">
                <x-heroicon-o-shopping-bag class="w-6"/>
                <div class="flex flex-col space-y-1">
                    <strong class="font-medium">
                        @lang('rapidez-ct::frontend.account.dashboard.orders')
                    </strong>
                    <p class="text-inactive">
                        @lang('Herhaalbestelling plaatsen / Bestellingen bekijken')
                    </p>
                </div>
            </div>
            <div class="border h-20 flex flex-wrap items-center bg-white px-8 py-4 space-x-6 rounded">
                <x-heroicon-o-shopping-bag class="w-6"/>
                <div class="flex flex-col space-y-1">
                    <strong class="font-medium">
                        @lang('rapidez-ct::frontend.account.dashboard.orders')
                    </strong>
                    <p class="text-inactive">
                        @lang('Herhaalbestelling plaatsen / Bestellingen bekijken')
                    </p>
                </div>
            </div>
       </x-rapidez-ct::card.inactive>
    </x-rapidez-ct::sections>

@endsection
