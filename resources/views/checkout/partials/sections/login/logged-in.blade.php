<label>
    <x-rapidez::label>@lang('Email')</x-rapidez::label>
    <x-rapidez::input
        v-bind:value="user.value?.email"
        name="email"
        type="email"
        disabled
        class="justify-center"
        required
        :placeholder="__('Enter your e-mail address')"
    />
</label>
<div>
    <p class="text-sm font-medium">@lang('Welcome back') @{{ user.value?.firstname }}!</p>
    <span class="text-muted text-sm">
        @lang('Is this not your account?')
        <user v-slot="user">
            <button class="underline" v-on:click.prevent="user.logout('/login')" data-testid="logout-button">@lang('Log out')</button>
        </user>
        @lang('and use a different e-mail address.')
    </span>
</div>
