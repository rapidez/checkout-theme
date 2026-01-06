<template v-if="cart?.value?.prices">
    <div>
        <dt>@lang('Subtotal')</dt>
        <dd v-if="showTax" v-cloak>@{{ window.price(cart.value.prices.subtotal_including_tax.value) }}</dd>
        <dd v-else v-cloak>@{{ window.price(cart.value.prices.subtotal_excluding_tax.value) }}</dd>
    </div>
    <div v-if="cart.value.prices.applied_taxes.length">
        <dt>@lang('Tax')</dt>
        <dd v-cloak>@{{ window.price(cart.value.prices.applied_taxes?.[0].amount.value) }}</dd>
    </div>
    <div v-if="cart.value.shipping_addresses.length && cart.value.shipping_addresses?.[0]?.selected_shipping_method">
        <dt>
            @lang('Shipping')<br>
            <small v-cloak>
                @{{ cart.value.shipping_addresses[0]?.selected_shipping_method.carrier_title }} - @{{ cart.value.shipping_addresses[0]?.selected_shipping_method.method_title }}
            </small>
        </dt>
        <dd v-cloak v-if="cart.value.shipping_addresses?.[0]?.selected_shipping_method.amount.value > 0">@{{ window.price(cart.value.shipping_addresses?.[0]?.selected_shipping_method.amount.value) }}</dd>
        <dd v-else class="text-primary font-medium">
            @lang('Free')
        </dd>
    </div>

    <div v-for="discount in cart.value.prices.discounts">
        <dt v-cloak>@{{ discount.label }}</dt>
        <dd v-cloak>-@{{ window.price(discount.amount.value) }}</dd>
    </div>
    <div class="font-bold">
        <dt>@lang('Total')</dt>
        <dd v-cloak>@{{ window.price(cart.value.prices.grand_total.value) }}</dd>
    </div>
</template>
