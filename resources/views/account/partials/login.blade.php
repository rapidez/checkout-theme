<login v-cloak :checkout-login="false" v-slot="{ email, password, go, loginInputChange }" redirect="{{ $redirect ?? '/account' }}">
    <x-rapidez-ct::card.inactive>
        <form class="space-y-5" v-on:submit.prevent="go()">
            <x-rapidez-ct::input
                label="Email"
                name="email"
                type="email"
                v-bind:value="email"
                v-on:input="loginInputChange"
                required
            />
            <x-rapidez-ct::input
                label="Password"
                name="password"
                type="password"
                v-bind:value="password"
                v-on:input="loginInputChange"
                required
            />
            <x-rapidez-ct::button.accent type="submit" class="w-full" dusk="continue">
                @lang('Login')
            </x-rapidez-ct::button.accent>
             <div class="flex justify-center">
                <a href="/forgotpassword" class="text-sm text-ct-inactive hover:underline">
                    @lang('Forgot your password?')
                </a>
            </div>
        </form>
    </x-rapidez-ct::card.inactive>
</login>
