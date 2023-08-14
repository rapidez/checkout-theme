<template v-if="segment.code !== 'shipping'">
    <span>@{{ segment.title }}</span>
    <span>@{{ segment.value | price }}</span>
</template>
<template v-else>
    <span>@lang('Shipping')</span>
    <span v-if="checkout.totals.shipping_amount > 0">
        @{{ checkout.totals.shipping_amount | price }}
    </span>
    <span v-else class="text-ct-enhanced font-medium">
        @lang('Free')
    </span>
</template>
