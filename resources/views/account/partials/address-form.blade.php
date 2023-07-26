<form slot-scope="{ variables, mutate, mutated }" v-on:submit.prevent="mutate">
    <x-rapidez-ct::card.inactive class="mb-6">
        <x-rapidez-ct::address-form type="edit" address="variables" country-key="country_code"/>

        <div class="flex gap-5 py-5">
            <x-rapidez-ct::input.checkbox v-model="variables.default_shipping">@lang('Default shipping address')</x-input.checkbox>
                <x-rapidez-ct::input.checkbox v-model="variables.default_billing">@lang('Default billing address')</x-input.checkbox>
        </div>

    </x-rapidez-ct::card.inactive>
    <x-rapidez-ct::toolbar>
        <x-rapidez-ct::button.outline :href="route('account.edit')">
            @lang('Back to settings')
        </x-rapidez-ct::button.outline>
        <div>
            <x-rapidez-ct::button.accent type="submit">
                @lang(request()->id ? 'Change address and save' : 'Add address and save')
            </x-rapidez-ct::button.accent>
            <div v-if="mutated" class="ml-3 text-green-500">
                @lang('Changed successfully!')
            </div>
        </div>
    </x-rapidez-ct::toolbar>
</form>
