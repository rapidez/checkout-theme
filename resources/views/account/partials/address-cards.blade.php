<x-rapidez-ct::title.lg>
    @lang('My addresses')
</x-rapidez-ct::title.lg>
<div class="grid gap-5 md:grid-cols-2 my-5">
    <template v-if="data.customer.shipping_address?.default_billing || !data.customer.shipping_address || !data.customer.billing_address">
        <template v-if="data.customer.shipping_address || data.customer.billing_address">
            <x-rapidez-ct::card.address v-bind:address="data.customer.shipping_address ?? data.customer.billing_address" shipping billing check>
                <x-rapidez-ct::button.link v-bind:href="`/account/address/${(data.customer.shipping_address ?? data.customer.billing_address).id}`">
                    @lang('Edit')
                </x-rapidez-ct::button.link>
            </x-rapidez-ct::card.address>
        </template>
        <a href="/account/address/new" class="min-h-[180px] flex flex-col items-center justify-center gap-y-2 font-medium bg-ct-disabled rounded max-md:hidden">
            <span>+</span>
            <span>@lang('Add new address')</span>
        </a>
    </template>
    <template v-else>
        <x-rapidez-ct::card.address v-bind:address="data.customer.shipping_address" shipping check>
            <x-rapidez-ct::button.link v-bind:href="`/account/address/${data.customer.shipping_address.id}`">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::card.address>
        <x-rapidez-ct::card.address v-bind:address="data.customer.billing_address" billing check>
            <x-rapidez-ct::button.link v-bind:href="`/account/address/${data.customer.billing_address.id}`">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::card.address>
    </template>
</div>
<div class="flex gap-5">
    <x-rapidez-ct::button.accent :href="route('account.address.create')">
        @lang('Add a new address')
    </x-rapidez-ct::button.accent>
    <x-rapidez-ct::button.outline tag="label" for="popup" v-if="data?.customer?.addresses?.length">
        @lang('My addresses')
    </x-rapidez-ct::button.outline>
</div>
