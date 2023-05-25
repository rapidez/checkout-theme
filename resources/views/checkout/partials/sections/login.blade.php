<login v-slot="{ email, password, go, loginInputChange, emailAvailable }">
    <section>
        <div class="grid gap-5 md:grid-cols-2" >
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
        </div>
    </section>
</login>

