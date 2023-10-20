<div>
    <template v-if="segment.code !== 'shipping'">
        <dt>@{{ segment.title }}</dt>
        <dd>@{{ segment.value | price }}</dd>
    </template>
    <template v-else>
        <dt>@lang('Shipping')</dt>
        <dd v-if="checkout.totals.shipping_amount > 0">
            @{{ checkout.totals.shipping_amount | price }}
        </dd>
        <dd v-else class="text-ct-enhanced font-medium">
            @lang('Free')
        </dd>
    </template>
</div>
