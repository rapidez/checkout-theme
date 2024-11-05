@if ($type == 'shipping')
    <p class="mb-5 text-lg font-medium">
        @lang('Shipping address')
    </p>
@else
    <p class="mb-5 text-lg font-medium mt-9 pt-7 border-t-2 border-white" v-if="!variables.same_as_shipping" v-cloak>
        @lang('Billing address')
    </p>
@endif


<template @if($type == 'billing') v-if="!variables.same_as_shipping" @endif >
    <x-rapidez-ct::address-form :$type/>
</template>

@if ($type == 'billing')
    <div class="mt-5" v-if="!cart.is_virtual">
        <x-rapidez-ct::input.checkbox v-model="variables.same_as_shipping">
            @lang('My billing and shipping address are the same')
        </x-rapidez-ct::input.checkbox>
    </div>
@endif
