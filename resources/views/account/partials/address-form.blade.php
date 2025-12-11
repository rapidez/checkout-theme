@props(['region' => 'region_id'])

<form v-on:submit.prevent="mutate">
    <x-rapidez-ct::sections>
        <x-rapidez-ct::card.inactive>
            <x-rapidez-ct::address-form :$region/>
            <div class="flex gap-5 py-5">
                <x-rapidez::input.checkbox v-model="variables.default_shipping" name="default_shipping">
                    @lang('Default shipping address')
                </x-rapidez::input.checkbox>
                <x-rapidez::input.checkbox v-model="variables.default_billing" name="default_billing">
                    @lang('Default billing address')
                </x-rapidez::input.checkbox>
            </div>
        </x-rapidez-ct::card.inactive>
    </x-rapidez-ct::sections>
    <x-rapidez-ct::toolbar>
        <x-rapidez::button.outline :href="route('account.edit')">
            @lang('Back to settings')
        </x-rapidez::button.outline>
        <div>
            <x-rapidez::button.secondary type="submit" data-testid="continue">
                @lang(request()->id ? 'Change address and save' : 'Add address and save')
            </x-rapidez::button.secondary>
        </div>
    </x-rapidez-ct::toolbar>
</form>
