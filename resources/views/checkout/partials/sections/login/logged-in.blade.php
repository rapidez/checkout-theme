<x-rapidez::input
    name="email"
    type="email"
    label="Email"
    disabled
    v-bind:value="$root.user?.email"
    class="justify-center"
    required
    data-testid="email-input"
    :placeholder="__('Enter your e-mail address')"
/>
<div>
    <p class="text-sm font-medium">@lang('Welcome back') @{{ $root.user?.firstname }}!</p>
    <span class="text-muted text-sm">
        @lang('Is this not your account?')
        <user>
            <template v-slot="user">
                <button class="underline" v-on:click.prevent="user.logout('/login')" data-testid="logout-button">@lang('Log out')</button>
            </template>
        </user>
        @lang('and use a different e-mail address.')
    </span>
</div>
