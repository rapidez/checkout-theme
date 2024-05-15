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
<x-rapidez-ct::button.primary v-if="!emailAvailable" v-on:click.prevent="go" dusk="continue">
    @lang('Login')
</x-rapidez-ct::button.primary>