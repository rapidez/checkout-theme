@include('rapidez-ct::account.partials.address-cards.delete')

<x-rapidez-ct::button.link v-bind:href="`/account/address/${variables.id}`" data-testid="address-edit">
    @lang('Edit')
</x-rapidez-ct::button.link>

<x-rapidez-ct::button.link v-bind:disabled="mutating" v-if="!variables.default_shipping" v-on:click="variables.default_shipping=true;mutate()">
    @lang('Select as shipping')
</x-rapidez-ct::button.link>
<x-rapidez-ct::button.link v-bind:disabled="mutating" v-else="" v-on:click="variables.default_shipping=false;mutate()">
    @lang('Deselect as shipping')
</x-rapidez-ct::button.link>

<x-rapidez-ct::button.link v-bind:disabled="mutating" v-if="!variables.default_billing" v-on:click="variables.default_billing=true;mutate()">
    @lang('Select as billing')
</x-rapidez-ct::button.link>
<x-rapidez-ct::button.link v-bind:disabled="mutating" v-else="" v-on:click="variables.default_billing=false;mutate()">
    @lang('Deselect as billing')
</x-rapidez-ct::button.link>
