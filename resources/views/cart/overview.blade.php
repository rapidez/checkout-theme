@extends('rapidez::layouts.app')

@section('title', __('Cart'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <cart v-cloak>
        <div v-if="hasItems" class="container" slot-scope="{ cart, hasItems, changeQty, remove }">
            @include('rapidez-ct::cart.content')
        </div>
        <div v-else class="container">
            <p>@lang("You don't have anything in your cart.")</p>
            <x-rapidez-ct::button.outline class="mt-3" href="/">
                @lang('Return to home')
            </x-rapidez-ct::button.outline>
        </div>
    </cart>
@endsection

