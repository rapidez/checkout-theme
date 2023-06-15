@extends('rapidez::layouts.app')

@section('title', __('Register'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container">
        <x-rapidez-ct::layout>
            <x-rapidez-ct::title href="/login">
                @lang('Register')
            </x-rapidez-ct::title>

            <x-rapidez-ct::sections>
                @include('rapidez-ct::account.partials.register-account')
                @include('rapidez-ct::components.newsletter')
                <div class="!mt-5 flex flex-wrap justify-between gap-2">
                    <x-rapidez-ct::button.outline href="/login">
                        @lang('Back to login')
                    </x-rapidez-ct::button.outline>
                    <x-rapidez-ct::button.accent
                        form="register"
                        type="submit"
                    >
                        @lang('Register')
                    </x-rapidez-ct::button.accent>
                </div>
            </x-rapidez-ct::sections>

            <x-slot:sidebar>
                @include('rapidez-ct::account.partials.account-features')
            </x-slot:sidebar>
        </x-rapidez-ct::layout>
    </div>
@endsection
