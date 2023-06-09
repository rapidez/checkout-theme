<graphql-mutation
    v-cloak
    query="mutation reset($email: String!) { requestPasswordResetEmail ( email: $email ) }"
    :clear="true"
    :notify="{ message: '@lang('An email is send with a password reset link if an account exists with the provided email address.')' }"
>
    <x-rapidez-ct::card.inactive slot-scope="{ mutate, variables }">
        <form v-on:submit.prevent="mutate">
            <x-rapidez-ct::title.lg>
                @lang('Forgot Your Password?')
            </x-rapidez-ct::title.lg>
            <x-rapidez-ct::input
                name="email"
                type="email"
                v-model="variables.email"
                required
            />
            <x-rapidez-ct::button.accent type="submit">
                @lang('Reset password')
            </x-rapidez-ct::button.accent>
        </form>
    </x-rapidez-ct::card.inactive>
</graphql-mutation>
