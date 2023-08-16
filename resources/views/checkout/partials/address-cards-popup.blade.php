<input type="checkbox" id="popup" class="peer hidden"/>
<div class="fixed inset-0 opacity-0 transition z-50 flex justify-center items-center pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto">
    <x-rapidez-ct::sections class="relative z-10">
        <x-rapidez-ct::card.inactive>
            <x-rapidez-ct::title class="mb-5">@lang('My addresses')</x-rapidez-ct::title>
            <label class="absolute cursor-pointer top-7 right-7 w-5 h-5" for="popup">
                <x-heroicon-o-x-mark/>
            </label>

            <div class="grid sm:grid-cols-2 gap-5">
                <template v-for="userAddress in $root.user.addresses">
                    <x-rapidez-ct::card.address
                        v-bind:key="userAddress.id"
                        v-bind:address="userAddress"
                        v-bind:billing="isType('billing', userAddress)"
                        v-bind:shipping="isType('shipping', userAddress)"
                        check="isType('billing', userAddress) || isType('shipping', userAddress)"
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
        </x-rapidez-ct::card.inactive>
    </x-rapidez-ct::sections>
    <label class="absolute cursor-pointer inset-0 bg-ct-primary/60" for="popup"></label>
</div>