<x-rapidez-ct::sections>
    <x-rapidez-ct::card.inactive>
        <div class="grid gap-4 sm:gap-5 md:items-end">
            <template v-if="!loggedIn">
                @include('rapidez-ct::checkout.partials.sections.login.logged-out')
            </template>
            <template v-else>
                @include('rapidez-ct::checkout.partials.sections.login.logged-in')
            </template>
        </div>
    </x-rapidez-ct::card.inactive>
</x-rapidez-ct::sections>
