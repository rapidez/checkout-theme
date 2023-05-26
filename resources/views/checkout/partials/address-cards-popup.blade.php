<div
    class="fixed inset-0 opacity-0 transition z-50 flex justify-center items-center"
    :class="{ 'opacity-100': popup, 'pointer-events-none': !popup }"
>
    <div class="absolute inset-0 bg-primary/60" v-on:click="togglePopup"></div>
    <div class="bg-inactive-100 p-3 rounded z-10">
        <x-rapidez-ct::title class="text-24 p-3">@lang('My addresses')</x-rapidez-ct::title>

        <div class="grid grid-cols-2 gap-5 p-3">
            <x-rapidez-ct::card.address
                v-for="userAddress in $root.user.addresses"
                v-bind:key="userAddress.id"
                v-bind:address="userAddress"
                v-bind:billing="isType('billing', userAddress)"
                v-bind:shipping="isType('shipping', userAddress)"
                dynamic-type
                check="isType('billing', userAddress) || isType('shipping', userAddress)"
                class="min-w-[350px]"
            >
                <x-rapidez-ct::button.link v-if="!isType('shipping', userAddress)" v-on:click.prevent="select('shipping', userAddress)">
                    @lang('Select as shipping')
                </x-rapidez-ct::button.link>
                <x-rapidez-ct::button.link v-if="!isType('billing', userAddress)" v-on:click.prevent="select('billing', userAddress)">
                    @lang('Select as billing')
                </x-rapidez-ct::button.link>
            </x-rapidez-ct::card.address>
        </div>
    </div>
</div>