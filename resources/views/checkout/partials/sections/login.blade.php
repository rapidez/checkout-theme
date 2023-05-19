<login v-slot="{ email, password, go, loginInputChange, emailAvailable }">
    <section>
        <form id="login" class="grid gap-5 md:grid-cols-2" v-on:submit.prevent="go()">

            <x-rapidez-ct::input
                label="E-mailaddress"
                name="email"
                type="email"
                v-bind:value="email"
                v-on:input="loginInputChange"
                required
                placeholder="Enter your e-mailaddres"
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
            <p else class="self-end">Naar dit e-mailadres sturen wij uw bestelling bevestiging. Ook controleren we of u al een account hebt zodat u sneller kunt afrekenen.</p>

            <x-rapidez-ct::button.accent v-if="!emailAvailable" type="submit" dusk="continue">
                @lang('Login')
            </x-rapidez-ct::button.accent>
        </form>
    </section>
</login>

