<graphql-mutation
    :query="config.queries.setShippingMethodsOnCart"
    :variables="{
        cart_id: mask.value,
        method: cart.value.shipping_addresses?.[0]?.selected_shipping_method?.carrier_code + '/' + cart.value.shipping_addresses?.[0]?.selected_shipping_method?.method_code,
    }"
    group="shipping"
    :callback="updateCart"
    :error-callback="checkResponseForExpiredCart"
    :before-request="function (query, variables, options) {
        variables.carrier_code = variables.method.split('/')[0]
        variables.method_code = variables.method.split('/')[1]
        return [query, variables, options]
    }"
    mutate-event="setShippingMethodsOnCart"
    v-slot="{ mutate, variables }"
    v-if="!cart.value.is_virtual"
>
    <fieldset class="mt-5 flex flex-col gap-2" partial-submit v-on:partial-submit="async () => await mutate()" v-on:change="window.$emit('setShippingAddressesOnCart')">
        <template v-for="(method, index) in cart.value.shipping_addresses?.[0]?.available_shipping_methods">
            <x-rapidez-ct::input.radio.tile
                name="shipping_method"
                v-model="variables.method"
                v-bind:value="method.carrier_code+'/'+method.method_code"
                v-bind:disabled="!method.available"
                data-testid="shipping-method"
                v-on:change="mutate"
                required
            >
                <div class="sm:w-3/5">@{{ method.carrier_title }}</div>
                <div class="flex-1">@{{ method.method_title }}</div>
                <div class="text-right text-sm font-medium">
                    <div v-if="method.amount.value > 0" class="text-muted">@{{ window.price(method.amount.value) }}</div>
                    <div v-else="" class="text-primary">
                        @lang('Free')
                    </div>
                </div>
            </x-rapidez-ct::input.radio.tile>
        </template>
    </fieldset>
</graphql-mutation>
