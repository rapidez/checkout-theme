<login v-slot="{ email, password, go, loginInputChange, emailAvailable, logout }">
    <x-rapidez-ct::card.inactive>
        <div class="grid gap-4 sm:gap-5 md:grid-cols-2 md:items-end">
            <template v-if="!loggedIn">
                <x-rapidez-ct::input
                    name="email"
                    type="email"
                    label="Email"
                    v-bind:value="email"
                    v-on:input="loginInputChange"
                    v-on:blur="$root.guestEmail = email; if(!password) { go() }"
                    class="justify-center"
                    required
                    :placeholder="__('Enter your e-mail address')"
                />

                <x-rapidez-ct::input
                    name="password"
                    type="password"
                    v-if="!emailAvailable"
                    label="Password"
                    ref="password"
                    v-on:input="loginInputChange"
                    required
                />

                <p v-if="!emailAvailable" class="self-end text-ct-inactive">
                    @lang('You already have an account with this e-mail address. Please log in to continue.')
                </p>
                <p v-else class="self-end text-ct-inactive">
                    @lang('We will send your order confirmation to this e-mail address. We will also check if you already have an account so you can checkout more efficiently.')
                </p>
                @include('rapidez-ct::checkout.partials.buttons.login')
            </template>
            <template v-else>
                <x-rapidez-ct::input
                    name="email"
                    type="email"
                    label="Email"
                    disabeld
                    v-bind:value="email"
                    v-on:input="loginInputChange"
                    v-on:blur="$root.guestEmail = email; if(!password) { go() }"
                    class="justify-center"
                    required
                    :placeholder="__('Enter your e-mail address')"
                />
                <div>
                    <p class="text-sm font-medium text-ct-neutral">@lang('Welcome back') @{{ $root.user?.firstname }}!</p>
                    <span class="text-ct-inactive text-sm">
                        @lang('Is this not your account?')
                        <button class="underline" v-on:click.prevent="logout('/login')">@lang('Log out')</button>
                        @lang('and use a different e-mail address.')
                    </span>
                </div>
            </template>
        </div>
    </x-rapidez-ct::card.inactive>
</login>
