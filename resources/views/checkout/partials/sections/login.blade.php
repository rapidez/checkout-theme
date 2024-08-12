<login v-slot="{ email, password, go, loginInputChange, emailAvailable, logout }">
    <div class="grid gap-4 sm:gap-5 md:grid-cols-2 md:items-end">
        <template v-if="!loggedIn">
            @include('rapidez-ct::checkout.partials.sections.login.logged-out')
        </template>
        <template v-else>
            @include('rapidez-ct::checkout.partials.sections.login.logged-in')
        </template>
    </div>
</login>
