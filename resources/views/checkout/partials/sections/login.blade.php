<login v-slot="{ email, password, go, loginInputChange, emailAvailable, logout }">
    <x-rapidez-ct::card.inactive>
        <div class="grid gap-5 md:grid-cols-2">
            <template v-if="!loggedIn">
                <x-rapidez-ct::input
                    label="E-mail address"
                    name="email"
                    type="email"
                    v-bind:value="email"
                    v-on:input="loginInputChange"
                    v-on:blur="$root.guestEmail = email; if(!password) { go() }"
                    required
                    placeholder="Enter your e-mail address"
                />

                <x-rapidez-ct::input
                    v-if="!emailAvailable"
                    label="Password"
                    name="password"
                    type="password"
                    ref="password"
                    v-on:input="loginInputChange"
                    required
                />

                <p v-if="!emailAvailable" class="self-end">
                    @lang('You already have an account with this e-mail address. Please log in to continue.')
                </p>
                <p v-else class="self-end">
                    @lang('We will send your order confirmation to this e-mail address. We will also check if you already have an account so you can checkout more efficiently.')
                </p>

                <x-rapidez-ct::button.accent v-if="!emailAvailable" dusk="continue" v-on:click.prevent="go">
                    @lang('Login')
                </x-rapidez-ct::button.accent>
            </template>
            <template v-else>
                <div class="h-[52px] px-4 flex items-center rounded border bg-ct-disabled">
                    <x-heroicon-o-user-circle class="h-[24px] mr-[10px]"/>
                    <span v-text="$root.user?.email"></span>
                    <x-heroicon-o-lock-closed class="h-[24px] ml-auto text-ct-primary"/>
                </div>
                <div>
                    <x-rapidez-ct::title.sm>@lang('Welcome back') @{{ $root.user?.firstname }}!</x-rapidez-ct::title.sm>
                    <span>
                        @lang('Is this not your account?')
                        <button class="underline" v-on:click.prevent="logout('/login')">@lang('Log out')</button>
                        @lang('and use a different e-mail address.')
                    </span>
                </div>
            </template>
        </div>
    </x-rapidez-ct::card.inactive>
</login>
