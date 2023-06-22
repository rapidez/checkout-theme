<graphql-mutation
    v-cloak
    query="mutation reset($email: String!) { requestPasswordResetEmail ( email: $email ) }"
    :clear="true"
    :notify="{ message: '@lang('rapidez-ct::frontend.notifications.password_reset.request')' }"
>
    <x-rapidez-ct::card.inactive slot-scope="{ mutate, variables }">
        <form v-on:submit.prevent="mutate">
            <x-rapidez-ct::title.lg class="mb-4">
                @lang('rapidez-ct::frontend.account.forgot_password')
            </x-rapidez-ct::title.lg>
            <p class="mb-5 text-sm">
                @lang('rapidez-ct::frontend.account.reset_password_cta')
            </p>
            <x-rapidez-ct::input
                name="email"
                type="email"
                v-model="variables.email"
                label="Email"
                required
            />
            <div class="mt-5 flex items-center justify-between">
                <a
                    class="text-sm text-ct-inactive underline"
                    href="/login"
                >
                    @lang('rapidez-ct::frontend.account.back')
                </a>
                <x-rapidez-ct::button.accent
                    class="flex items-center gap-1"
                    type="submit"
                    dusk="continue"
                >
                    @lang('rapidez-ct::frontend.send')
                    <x-heroicon-o-arrow-right class="h-4" />
                </x-rapidez-ct::button.accent>
            </div>
        </form>
    </x-rapidez-ct::card.inactive>
</graphql-mutation>
