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

<div class="relative">
    <x-rapidez-ct::input
        name="password"
        type="password"
        v-if="!emailAvailable"
        label="Password"
        ref="password"
        v-on:input="loginInputChange"
        required
    />

    <input
        type="checkbox"
        v-if="!emailAvailable"
        oninvalid="this.setCustomValidity('{{ __('Please log in') }}')"
        class="absolute h-full inset-0 opacity-0 pointer-events-none"
        required
    />
</div>

<p v-if="!emailAvailable" class="self-end text-ct-inactive">
    @lang('You already have an account with this e-mail address. Please log in to continue.')
    <a href="{{ route('account.forgotpassword') }}" class="underline hover:no-underline">@lang('Forgot your password?')</a>
</p>
<p v-else class="self-end text-ct-inactive">
    @lang('We will send your order confirmation to this e-mail address. We will also check if you already have an account so you can checkout more efficiently.')
</p>
<x-rapidez-ct::button.accent v-if="!emailAvailable" v-on:click.prevent="go" dusk="continue">
    @lang('Login')
</x-rapidez-ct::button.accent>
