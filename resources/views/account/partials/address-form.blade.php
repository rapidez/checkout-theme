<form slot-scope="{ variables, mutate, mutated }" v-on:submit.prevent="mutate">
    <x-rapidez-ct::card.inactive class="mb-6">
        <x-rapidez-ct::address-form type="edit" address="variables" country-key="country_code"/>

        <div class="flex py-5 gap-5">
            <x-rapidez-ct::input.checkbox v-model="variables.default_shipping">@lang('Default shipping address')</x-input.checkbox>
            <x-rapidez-ct::input.checkbox v-model="variables.default_billing">@lang('Default billing address')</x-input.checkbox>
        </div>

    </x-rapidez-ct::card.inactive>
    <x-rapidez-ct::toolbar>
        <x-rapidez-ct::button.outline class="w-full flex-1 sm:w-auto sm:flex-none" :href="route('account.edit')">
            @lang('Back to settings')
        </x-rapidez-ct::button.outline>
        <div class="mb-4 w-full sm:mb-0 sm:w-auto">
            <x-rapidez-ct::button.accent class="w-full flex-1 sm:w-auto sm:flex-none" type="submit">
                @lang(request()->id ? 'Change address and save' : 'Add address and save')
            </x-rapidez-ct::button.accent>
            <div v-if="mutated" class="text-green-500 ml-3">
                @lang('Changed successfully!')
            </div>
        </div>
    </x-rapidez-ct::toolbar>
</form>
