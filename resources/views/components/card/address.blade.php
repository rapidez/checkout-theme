@props(['shipping' => false, 'billing' => false])

<address-card
    {{ $attributes->whereStartsWith('v-') }}
    :shipping="{{ var_export($shipping) }}"
    :billing="{{ var_export($billing) }}"
    v-slot="{ address, billing, shipping, isEmpty }"
>
    <x-rapidez-ct::card {{ $attributes->whereDoesntStartWith('v-') }} v-if="!isEmpty">
        <x-rapidez-ct::title.lg class="mb-4">
            <template v-if="billing && shipping">@lang('Shipping & billing address')</template>
            <template v-else-if="shipping">@lang('Shipping address')</template>
            <template v-else-if="billing">@lang('Billing address')</template>
            <template v-else>@lang('Address')</template>
        </x-rapidez-ct::title.lg>
        <div class="flex flex-wrap justify-between">
            <ul class="[&>*+*]:mt-1">
                <li v-for="data in address" v-text="data"></li>
            </ul>
            @isset($button)
                <button {{ $button->attributes->merge(['class' => 'underline text-inactive self-end']) }} >
                    {{ $button }}
                </button>
            @endisset
        </div>
    </x-rapidez-ct::card>
</address-card>