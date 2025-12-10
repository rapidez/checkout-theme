<graphql query="{ customer { firstname middlename lastname } }" v-slot="{ data }">
    <div v-if="data">
        <graphql-mutation query="mutation customer ($firstname: String, $middlename: String, $lastname: String) { updateCustomerV2 ( input: { firstname: $firstname, middlename: $middlename, lastname: $lastname } ) { customer { firstname middlename lastname } } }" :variables="data.customer" :callback="refreshUserInfoCallback" v-slot="{ variables, mutate, mutated }">
            <form
                v-on:submit.prevent="mutate"
                class="grid gap-5 lg:grid-cols-8"
            >
                <label class="col-span-full {{ Rapidez::config('customer/address/middlename_show') ? 'lg:col-span-3' : 'lg:col-span-4' }}">
                    <x-rapidez::label>@lang('First name')</x-rapidez::label>
                    <x-rapidez::input name="firstname" v-model="variables.firstname" required />
                </label>
                @if(Rapidez::config('customer/address/middlename_show', 0))
                    <label class="col-span-full lg:col-span-2">
                        <x-rapidez::label>@lang('Middle name')</x-rapidez::label>
                        <x-rapidez::input name="middlename" v-model="variables.middlename" />
                    </label>
                @endif
                <label class="col-span-full {{ Rapidez::config('customer/address/middlename_show') ? 'lg:col-span-3' : 'lg:col-span-4' }}">
                    <x-rapidez::label>@lang('Last name')</x-rapidez::label>
                    <x-rapidez::input name="lastname" v-model="variables.lastname" required/>
                </label>

                <div class="flex items-center">
                    <x-rapidez::button.secondary type="submit">
                        @lang('Change')
                    </x-rapidez::button.secondary>

                    <div v-if="mutated" class="ml-3 text-green-500">
                        @lang('Changed successfully!')
                    </div>
                </div>
            </form>
        </graphql-mutation>
    </div>
</graphql>
