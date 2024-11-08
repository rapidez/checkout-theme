<graphql-mutation
    v-cloak
    query="mutation reset($email: String!, $token: String!, $password: String!) { resetPassword ( email: $email, resetPasswordToken: $token, newPassword: $password ) }"
    :variables="{ token: '{{ request()->token }}' }"
    :clear="true"
    :notify="{ message: '@lang('Your password has been changed, please login.')' }"
>
    <form class="space-y-5" v-on:submit.prevent="mutate" slot-scope="{ mutate, variables }">
        <x-rapidez-ct::input
            name="token"
            v-model="variables.token"
            label="Security token"
            required
        />
        <x-rapidez-ct::input
            name="email"
            type="email"
            label="Email"
            v-model="variables.email"
            required
        />
        <x-rapidez-ct::input
            name="password"
            type="password"
            v-model="variables.password"
            label="New password"
            required
        />
        <x-rapidez-ct::button.accent type="submit" class="w-full">
            @lang('Change password')
        </x-rapidez-ct::button.accent>
    </form>
</graphql-mutation>
