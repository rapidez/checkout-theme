<graphql-mutation
    v-cloak
    query="mutation reset($email: String!) { requestPasswordResetEmail ( email: $email ) }"
    v-slot="{ mutate, variables }"
    :clear="true"
    :notify="{ message: '@lang('An email is send with a password reset link if an account exists with the provided email address.')' }"
>
    <form v-on:submit.prevent="mutate">
        <x-rapidez-ct::title.lg class="mb-4">
            @lang('Forgot your password?')
        </x-rapidez-ct::title.lg>
        <p class="mb-5 text-sm">
            @lang('Enter your email address below, you will receive an email within minutes to reset the password.')
        </p>
        <label>
            <x-rapidez::label>@lang('Email')</x-rapidez::label>
            <x-rapidez::input
                name="email"
                type="email"
                v-model="variables.email"
                required
            />
        </label>
        <div class="mt-5 flex items-center justify-between">
            <a href="{{ route('account.login') }}" class="text-sm text-ct-inactive underline">
                @lang('Back to login')
            </a>
            <x-rapidez::button.secondary
                class="flex items-center gap-1"
                type="submit"
                dusk="continue"
                loader
            >
                @lang('Send')
                <x-heroicon-o-arrow-right class="h-4" />
            </x-rapidez::button.secondary>
        </div>
    </form>
</graphql-mutation>
