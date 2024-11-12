@extends('rapidez-ct::account.partials.layout')
@section('robots', 'NOINDEX,NOFOLLOW')

@section('title', __('Order') . ' #' . $id)
@section('button')
    <graphql-mutation
        query='mutation { reorderItems(orderNumber: "{{ request()->id }}") { cart { id } userInputErrors { message } } }'
        redirect="{{ route('cart') }}"
        :callback="reorderCallback"
    >
        <form slot-scope="{ mutate, mutating, mutated }" v-on:submit.prevent="mutate">
            <x-rapidez-ct::button.enhanced type="submit" class="flex items-center" v-cloak>
                @lang('Order again')
            </x-rapidez-ct::button.enhanced>
        </form>
    </graphql-mutation>
@endsection

@section('account-content')
    <graphql
        query='@include('rapidez::account.partials.queries.order')'
        check="customer.orders.items[0]"
        :callback="async (variables, response) => {return await updateOrder(variables, {data: response.data.customer.orders.items})}"
    >
        <div slot-scope="{ order: data }" v-if="order">
            <x-rapidez-ct::sections>
                @include('rapidez-ct::account.partials.order.products')
                <x-rapidez-ct::card.inactive>
                    @include('rapidez-ct::account.partials.order.order-info')
                </x-rapidez-ct::card.inactive>
            </x-rapidez-ct::sections>
            <x-rapidez-ct::toolbar>
                <x-rapidez-ct::button.outline href="/account/orders">
                    @lang('Back to my orders')
                </x-rapidez-ct::button.outline>
                <span class="text-ct-inactive">
                    @lang('Order date'): @{{ (new Date(order.order_date)).toLocaleDateString() }}
                </span>
            </x-rapidez-ct::toolbar>
        </div>
    </graphql>
@endsection
