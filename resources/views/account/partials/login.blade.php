<login :checkout-login="false" v-slot="login" redirect="{{ $redirect ?? route('account.overview') }}">
    <form class="flex flex-col gap-y-5" v-on:submit.prevent="login.go()">
        <label>
            <x-rapidez::label>@lang('Email')</x-rapidez::label>
            <x-rapidez::input
                name="email"
                type="email"
                v-model="login.email"
                required
            />
        </label>
        <label>
            <x-rapidez::label>@lang('Password')</x-rapidez::label>
            <x-rapidez::input.password
                name="password"
                v-model="login.password"
                required
            />
        </label>
        <div class="flex items-center justify-between">
            <a href="{{ route('account.forgotpassword') }}" class="text-sm text-muted underline">
                @lang('Forgot your password?')
            </a>
            <x-rapidez::button.secondary
                class="flex items-center gap-1"
                type="submit"
                dusk="continue"
                loader
            >
                @lang('Login')
                <x-heroicon-o-arrow-right class="size-4" />
            </x-rapidez::button.secondary>
        </div>
    </form>
</login>
