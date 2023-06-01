<login v-slot="{ email, password, go, loginInputChange, emailAvailable, logout }">
    <section>
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

                <p v-if="!emailAvailable" class="self-end">Je hebt al een account met dit e-mailadres. Login om verder te gaan</p>
                <p v-else class="self-end">Naar dit e-mailadres sturen wij uw bestelling bevestiging. Ook controleren we of u al een account hebt zodat u sneller kunt afrekenen.</p>

                <x-rapidez-ct::button.accent v-if="!emailAvailable" dusk="continue" v-on:click.prevent="go">
                    @lang('Login')
                </x-rapidez-ct::button.accent>
            </template>
            <template v-else>
                <div class="h-[52px] px-4 flex items-center rounded border border-border bg-inactive-200">
                    <x-heroicon-o-user-circle class="h-[24px] mr-[10px]"/>
                    <span v-text="$root.user?.email"></span>
                </div>
                <div>
                    <x-rapidez-ct::title.sm>@lang('Welcome back') @{{ $root.user?.firstname }}!</x-rapidez-ct::title.sm>
                    <span>
                        @lang('Is this not your account?')
                        <span class="underline cursor-pointer" v-on:click="logout('/')">@lang('Log out')</span>
                        @lang('and use a different e-mail address.')
                    </span>
                </div>
            </template>
        </div>
    </section>
</login>

