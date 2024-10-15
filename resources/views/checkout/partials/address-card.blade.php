<div class="grid gap-5 lg:grid-cols-2">
    <template v-for="userAddress in $root.user.addresses">
        <x-rapidez-ct::card.address
            v-bind:key="userAddress.id"
            v-bind:address="userAddress"
            v-bind:billing="isType('billing', userAddress)"
            v-bind:shipping="isType('shipping', userAddress)"
            v-bind:check="isType('billing', userAddress) || isType('shipping', userAddress)"
            class="w-full sm:min-w-[350px]"
        >
            <x-rapidez-ct::button.link v-if="!isType('shipping', userAddress)" v-on:click.prevent="select('shipping', userAddress)">
                @lang('Select as shipping')
            </x-rapidez-ct::button.link>
            <x-rapidez-ct::button.link v-if="!isType('billing', userAddress)" v-on:click.prevent="select('billing', userAddress)">
                @lang('Select as billing')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::card.address>
    </template>
</div>
