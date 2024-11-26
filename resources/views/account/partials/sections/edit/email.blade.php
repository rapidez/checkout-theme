<x-rapidez-ct::card.inactive>
    <graphql-mutation
        query="mutation email ($email: String!, $password: String!) { updateCustomerEmail ( email: $email, password: $password ) { customer { email } } }"
        :clear="true"
        :callback="refreshUserInfoCallback"
        :variables="{ email: user.email }"
    >
        <form class="grid gap-5 grid-cols-2" slot-scope="{ variables, mutate, mutated }" v-on:submit.prevent="mutate">
            <x-rapidez-ct::title.lg class="col-span-2">
                @lang('Change e-mail address')
            </x-rapidez-ct::title.lg>
            <x-rapidez-ct::input
                name="email"
                label="Email"
                v-model="variables.email"
                required
            />
            <x-rapidez-ct::input
                type="password"
                label="Password"
                name="password"
                v-model="variables.password"
                required
            />

            <div class="flex items-center col-span-full">
                <x-rapidez-ct::button.accent type="submit">
                    @lang('Change e-mail address')
                </x-rapidez-ct::button.accent>

                <div v-if="mutated" class="ml-3 text-green-500">
                    @lang('Changed successfully!')
                </div>
            </div>
        </form>
    </graphql-mutation>
</x-rapidez-ct::card.inactive>
