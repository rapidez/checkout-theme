@if ($type == 'shipping')
    <p class="mb-5 text-lg font-medium">
        @lang('Shipping address')
    </p>
@else
    <p class="mb-5 text-lg font-medium mt-9 pt-7 border-t-2 border-white" v-if="!variables.same_as_shipping" v-cloak>
        @lang('Billing address')
    </p>
@endif

<x-rapidez-ct::address-form :$type/>
