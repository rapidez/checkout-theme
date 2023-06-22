<graphql-mutation
    v-cloak
    query="mutation reset($email: String!) { requestPasswordResetEmail ( email: $email ) }"
    :clear="true"
    :notify="{ message: '@lang('rapidez-ct::frontend.notifications.password_reset.request')' }"
>
    <x-rapidez-ct::card.inactive slot-scope="{ mutate, variables }">
        <form v-on:submit.prevent="mutate">
            <x-rapidez-ct::title.lg>
                @lang('rapidez-ct::frontend.account.forgot_password')
            </x-rapidez-ct::title.lg>
            <x-rapidez-ct::input
                name="email"
                type="email"
                v-model="variables.email"
                required
            />
            <x-rapidez-ct::button.accent type="submit">
                @lang('rapidez-ct::frontend.account.reset_password')
            </x-rapidez-ct::button.accent>
        </form>
    </x-rapidez-ct::card.inactive>
</graphql-mutation>
