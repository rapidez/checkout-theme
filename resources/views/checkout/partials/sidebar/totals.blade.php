<div>
    <dt>@lang('Subtotal')</dt>
    <dd>@{{ cart.prices.subtotal_including_tax.value | price }}</dd>
</div>
<div v-if="cart.prices.applied_taxes.length">
    <dt>@lang('Tax')</dt>
    <dd>@{{ cart.prices.applied_taxes[0].amount.value | price }}</dd>
</div>
<div v-if="cart.shipping_addresses.length && cart.shipping_addresses[0]?.selected_shipping_method">
    <dt>
        @lang('Shipping')<br>
        <small>@{{ cart.shipping_addresses[0]?.selected_shipping_method.carrier_title }} - @{{ cart.shipping_addresses[0]?.selected_shipping_method.method_title }}</small>
    </dt>
    <dd v-if="cart.shipping_addresses[0]?.selected_shipping_method.amount.value > 0">@{{ cart.shipping_addresses[0]?.selected_shipping_method.amount.value | price }}</dd>
    <dd v-else class="text-ct-enhanced font-medium">
        @lang('Free')
    </dd>
</div>
<div v-for="discount in cart.prices.discounts">
    <dt>@{{ discount.label }}</dt>
    <dd>-@{{ discount.amount.value | price }}</dd>
</div>
<div class="font-bold">
    <dt>@lang('Total')</dt>
    <dd>@{{ cart.prices.grand_total.value | price }}</dd>
</div>