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
                    @lang('rapidez-ct::frontend.checkout.login.email_exists')
                </p>
                <p v-else class="self-end">
                    @lang('rapidez-ct::frontend.checkout.login.login_text')
                </p>

                <x-rapidez-ct::button.accent v-if="!emailAvailable" dusk="continue" v-on:click.prevent="go">
                    @lang('rapidez-ct::frontend.account.login')
                </x-rapidez-ct::button.accent>
            </template>
            <template v-else>
                <div class="h-[52px] px-4 flex items-center rounded border bg-ct-disabled">
                    <x-heroicon-o-user-circle class="h-[24px] mr-[10px]"/>
                    <span v-text="$root.user?.email"></span>
                    <x-heroicon-o-lock-closed class="h-[24px] ml-auto text-ct-primary"/>
                </div>
                <div>
                    <x-rapidez-ct::title.sm>@lang('rapidez-ct::frontend.checkout.login.welcome_back') @{{ $root.user?.firstname }}!</x-rapidez-ct::title.sm>
                    <span>
                        @lang('rapidez-ct::frontend.checkout.login.wrong_account.before')
                        <button class="underline" v-on:click.prevent="logout('/login')">@lang('rapidez-ct::frontend.account.logout')</button>
                        @lang('rapidez-ct::frontend.checkout.login.wrong_account.after')
                    </span>
                </div>
            </template>
        </div>
    </x-rapidez-ct::card.inactive>
</login>
