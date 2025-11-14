<login v-slot="{ email, password, go, loginInputChange, emailAvailable, logout }">
    <div class="grid gap-4 sm:grid-cols-2 sm:gap-5 md:items-end">
        <template v-if="!window.app.config.globalProperties.loggedIn.value">
            @include('rapidez-ct::checkout.partials.sections.login.logged-out')
        </template>
        <template v-else="">
            @include('rapidez-ct::checkout.partials.sections.login.logged-in')
        </template>
    </div>
</login>
