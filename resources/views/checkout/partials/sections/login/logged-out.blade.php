<checkout-login v-slot="checkoutLogin">
    <fieldset partial-submit="go" class="grid gap-4 md:gap-5 md:grid-cols-2">
        <label>
            <x-rapidez::label>@lang('Email')</x-rapidez::label>
            <x-rapidez::input
                name="email"
                type="email"
                v-model="checkoutLogin.email"
                v-bind:disabled="loggedIn"
                class="justify-center"
                required
                :placeholder="__('Enter your e-mail address')"
            />
        </label>

        <p v-if="checkoutLogin.isEmailAvailable" class="self-end text-muted">
            @lang('We\'ll email your order confirmation and check if you have an account for faster checkout.')
        </p>

        <template v-if="!loggedIn && (!checkoutLogin.isEmailAvailable || checkoutLogin.createAccount)">
            <label>
                <x-rapidez::label>@lang('Password')</x-rapidez::label>
                <x-rapidez::input.password
                    name="password"
                    v-model="checkoutLogin.password"
                    v-bind:required="checkoutLogin.createAccount || {{ (int)(!config('rapidez.frontend.allow_guest_on_existing_account')) }} ? 'required' : null"
                />
            </label>
        </template>
        <p v-if="!loggedIn && !checkoutLogin.isEmailAvailable" class="self-end text-muted">
            @lang('You already have an account with this e-mail address. Please log in to continue.')
            <a href="{{ route('account.forgotpassword') }}" class="underline hover:no-underline">@lang('Forgot your password?')</a>
        </p>
        @if (App::providerIsLoaded('Rapidez\Account\AccountServiceProvider'))
            <a href="{{ route('account.forgotpassword') }}" class="inline-block text-sm hover:underline mt-5" v-if="!checkoutLogin.isEmailAvailable">
                @lang('Forgot your password?')
            </a>
        @endif
        <template v-if="!loggedIn && checkoutLogin.createAccount">
            <label>
                <x-rapidez::label>@lang('Repeat password')</x-rapidez::label>
                <x-rapidez::input.password
                    name="password_repeat"
                    v-model="checkoutLogin.password_repeat"
                    required
                />
            </label>
            <label>
                <x-rapidez::label>@lang('Firstname')</x-rapidez::label>
                <x-rapidez::input
                    name="firstname"
                    type="text"
                    v-model="checkoutLogin.firstname"
                    required
                />
            </label>
            <label>
                <x-rapidez::label>@lang('Lastname')</x-rapidez::label>
                <x-rapidez::input
                    name="lastname"
                    type="text"
                    v-model="checkoutLogin.lastname"
                    required
                />
            </label>
        </template>

        <template v-if="!loggedIn && checkoutLogin.isEmailAvailable">
            <div class="col-span-full">
                <x-rapidez::input.checkbox v-model="checkoutLogin.createAccount" dusk="create_account">
                    @lang('Create an account')
                </x-rapidez::input.checkbox>
            </div>
        </template>

        <x-rapidez::button.secondary type="button" v-on:click="checkoutLogin.go" v-if="checkoutLogin.isEmailAvailable && checkoutLogin.createAccount" dusk="register">
            @lang('Register')
        </x-rapidez::button.secondary>
        <x-rapidez::button.secondary type="button" v-on:click="checkoutLogin.go" v-if="!checkoutLogin.isEmailAvailable" dusk="register">
            @lang('Login')
        </x-rapidez::button.secondary>
    </fieldset>
</checkout-login>
