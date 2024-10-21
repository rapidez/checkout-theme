<p class="mb-5 text-lg font-medium">
    @if ($type == 'shipping')
        @lang('Shipping address')
    @else
        @lang('Billing address')
    @endif
</p>

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
