<x-rapidez-ct::title.lg>
    @lang('My addresses')
</x-rapidez-ct::title.lg>
<div class="grid gap-5 md:grid-cols-2 my-5">
    <template v-if="data.customer.shipping_address?.default_billing || !data.customer.shipping_address || !data.customer.billing_address">
        <template v-if="data.customer.shipping_address || data.customer.billing_address">
            <x-rapidez-ct::card.address v-bind:address="data.customer.shipping_address ?? data.customer.billing_address" shipping billing check>
                <x-rapidez-ct::button.link v-bind:href="`/account/address/${(data.customer.shipping_address ?? data.customer.billing_address).id}`" data-testid="address-edit">
                    @lang('Edit')
                </x-rapidez-ct::button.link>
            </x-rapidez-ct::card.address>
        </template>
    </template>
    <template v-else>
        <x-rapidez-ct::card.address v-bind:address="data.customer.shipping_address" shipping check>
            <x-rapidez-ct::button.link v-bind:href="`/account/address/${data.customer.shipping_address.id}`" data-testid="address-edit">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::card.address>
        <x-rapidez-ct::card.address v-bind:address="data.customer.billing_address" billing check>
            <x-rapidez-ct::button.link v-bind:href="`/account/address/${data.customer.billing_address.id}`" data-testid="address-edit">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::card.address>
    </template>
</div>
