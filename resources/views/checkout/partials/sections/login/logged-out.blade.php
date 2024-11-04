<checkout-login v-slot="checkoutLogin">
    <fieldset partial-submit="go" class="flex flex-col gap-3">
        <x-rapidez-ct::input
            label="Email"
            name="email"
            type="email"
            v-model="checkoutLogin.email"
            v-bind:disabled="loggedIn"
            class="justify-center"
            required
            :placeholder="__('Enter your e-mail address')"
        />
        <template v-if="!loggedIn && (!checkoutLogin.isEmailAvailable || checkoutLogin.createAccount)">
            <x-rapidez-ct::input
                label="Password"
                name="password"
                type="password"
                v-model="checkoutLogin.password"
                required
            />
        </template>
        <p v-if="!loggedIn && !checkoutLogin.isEmailAvailable" class="self-end text-ct-inactive">
            @lang('You already have an account with this e-mail address. Please log in to continue.')
            <a href="{{ route('account.forgotpassword') }}" class="underline hover:no-underline">@lang('Forgot your password?')</a>
        </p>
        @if (App::providerIsLoaded('Rapidez\Account\AccountServiceProvider'))
            <a href="{{ route('account.forgotpassword') }}" class="inline-block text-sm hover:underline mt-5" v-if="!checkoutLogin.isEmailAvailable">
                @lang('Forgot your password?')
            </a>
        @endif
        <template v-if="!loggedIn && checkoutLogin.createAccount">
            <x-rapidez-ct::input
                label="Repeat password"
                name="password_repeat"
                type="password"
                v-model="checkoutLogin.password_repeat"
                required
            />
            <x-rapidez-ct::input
                label="Firstname"
                name="firstname"
                type="text"
                v-model="checkoutLogin.firstname"
                required
            />
            <x-rapidez-ct::input
                label="Lastname"
                name="lastname"
                type="text"
                v-model="checkoutLogin.lastname"
                required
            />
        </template>
        <template v-if="!loggedIn && checkoutLogin.isEmailAvailable">
            <x-rapidez::checkbox v-model="checkoutLogin.createAccount" dusk="create_account">
                @lang('Create an account')
            </x-rapidez::checkbox>
        </template>

        <p v-if="checkoutLogin.isEmailAvailable" class="self-end text-ct-inactive">
            @lang('We will send your order confirmation to this e-mail address. We will also check if you already have an account so you can checkout more efficiently.')
        </p>

        <x-rapidez-ct::button.accent type="button" v-on:click="checkoutLogin.go" v-if="checkoutLogin.isEmailAvailable && checkoutLogin.createAccount" dusk="register">
            @lang('Register')
        </x-rapidez-ct::button.accent>
        <x-rapidez-ct::button.accent type="button" v-on:click="checkoutLogin.go" v-if="!checkoutLogin.isEmailAvailable" dusk="register">
            @lang('Login')
        </x-rapidez-ct::button.accent>
    </fieldset>
</checkout-login>

