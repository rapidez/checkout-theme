<x-rapidez-ct::card.inactive v-if="!$root.loggedIn">
    <x-rapidez-ct::title.lg>
        @lang('Create account')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::input
        name="email"
        type="email"
        label="E-mailaddress"
        v-bind:value="email"
        disabled
    />
</x-rapidez-ct::card.inactive>
