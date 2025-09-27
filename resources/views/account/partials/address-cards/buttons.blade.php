@include('rapidez-ct::account.partials.address-cards.delete')

<x-rapidez-ct::button.link v-bind:href="`/account/address/${userAddress.id}`" data-testid="address-edit">
    @lang('Edit')
</x-rapidez-ct::button.link>

<x-rapidez-ct::button.link v-bind:disabled="mutating" v-if="!userAddress.default_shipping" v-on:click="userAddress.default_shipping=true;mutate()">
    @lang('Select as shipping')
</x-rapidez-ct::button.link>
<x-rapidez-ct::button.link v-bind:disabled="mutating" v-else v-on:click="userAddress.default_shipping=false;mutate()">
    @lang('Deselect as shipping')
</x-rapidez-ct::button.link>

<x-rapidez-ct::button.link v-bind:disabled="mutating" v-if="!userAddress.default_billing" v-on:click="userAddress.default_billing=true;mutate()">
    @lang('Select as billing')
</x-rapidez-ct::button.link>
<x-rapidez-ct::button.link v-bind:disabled="mutating" v-else v-on:click="userAddress.default_billing=false;mutate()">
    @lang('Deselect as billing')
</x-rapidez-ct::button.link>
