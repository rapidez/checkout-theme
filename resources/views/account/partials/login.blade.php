<login :checkout-login="false" v-slot="login" redirect="{{ $redirect ?? route('account.overview') }}">
    <form class="space-y-5" v-on:submit.prevent="login.go()">
        <x-rapidez-ct::input
            name="email"
            type="email"
            label="Email"
            v-model="login.email"
            required
        />
        <x-rapidez-ct::input.password
            name="password"
            label="Password"
            v-model="login.password"
            required
        />
        <div class="flex items-center justify-between">
            <a href="{{ route('account.forgotpassword') }}" class="text-sm text-ct-inactive underline">
                @lang('Forgot your password?')
            </a>
            <x-rapidez-ct::button.accent
                class="flex items-center gap-1"
                type="submit"
                dusk="continue"
                loader
            >
                @lang('Login')
                <x-heroicon-o-arrow-right class="h-4" />
            </x-rapidez-ct::button.accent>
        </div>
    </form>
</login>
