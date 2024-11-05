<login v-slot="{ email, password, go, loginInputChange, emailAvailable, logout }">
    <x-rapidez-ct::card.inactive>
        <template v-if="!loggedIn">
            @include('rapidez-ct::checkout.partials.sections.login.logged-out')
        </template>
        <template v-else>
            <div class="grid gap-4 sm:gap-5 md:grid-cols-2 md:items-end">
                @include('rapidez-ct::checkout.partials.sections.login.logged-in')
            </div>
        </template>
    </x-rapidez-ct::card.inactive>
</login>
