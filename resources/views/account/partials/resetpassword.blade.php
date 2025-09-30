<graphql-mutation
    v-cloak
    query="mutation reset($email: String!, $token: String!, $password: String!) { resetPassword ( email: $email, resetPasswordToken: $token, newPassword: $password ) }"
    :variables="{ token: '{{ request()->token }}', email: '{{ request()->email }}' }"
    :clear="true"
    :notify="{ message: '@lang('Your password has been changed, please login.')' }"
    redirect="{{ route('account.login') }}"
>
    <form class="flex flex-col gap-y-5" v-on:submit.prevent="mutate" slot-scope="{ mutate, variables }">
        <label class="hidden">
            <x-rapidez::label>@lang('Security token')</x-rapidez::label>
            <x-rapidez::input
                name="token"
                v-model="variables.token"
                required
            />
        </label>
        <label>
            <x-rapidez::label>@lang('Email')</x-rapidez::label>
            <x-rapidez::input
                name="email"
                type="email"
                v-model="variables.email"
                required
            />
        </label>
        <label>
            <x-rapidez::label>@lang('New password')</x-rapidez::label>
            <x-rapidez::input.password
                name="password"
                v-model="variables.password"
                required
            />
        </label>
        <x-rapidez::button.secondary type="submit" class="w-full">
            @lang('Change password')
        </x-rapidez::button.secondary>
    </form>
</graphql-mutation>
