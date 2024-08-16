<x-rapidez-ct::input
    name="email"
    type="email"
    label="Email"
    disabled
    v-bind:value="$root.user?.email"
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
