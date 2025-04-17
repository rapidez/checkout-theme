@props(['region' => 'region_id'])

<form slot-scope="{ variables, mutate, mutated }" v-on:submit.prevent="mutate">
    <x-rapidez-ct::sections>
        <x-rapidez-ct::card.inactive>
            <x-rapidez-ct::address-form type="edit" :$region/>
            <div class="flex gap-5 py-5">
                <x-rapidez::input.checkbox v-model="variables.default_shipping">@lang('Default shipping address')</x-input.checkbox>
                <x-rapidez::input.checkbox v-model="variables.default_billing">@lang('Default billing address')</x-input.checkbox>
            </div>
        </x-rapidez-ct::card.inactive>
    </x-rapidez-ct::sections>
    <x-rapidez-ct::toolbar>
        <x-rapidez::button.outline :href="route('account.edit')">
            @lang('Back to settings')
        </x-rapidez::button.outline>
        <div>
            <x-rapidez::button.secondary type="submit">
                @lang(request()->id ? 'Change address and save' : 'Add address and save')
            </x-rapidez::button.secondary>
            <div v-if="mutated" class="ml-3 text-green-500">
                @lang('Changed successfully!')
            </div>
        </div>
    </x-rapidez-ct::toolbar>
</form>
