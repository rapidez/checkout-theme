<user v-slot="{ logout }">
    <x-rapidez-ct::dashboard.sidebar-item
        :$item
        :$key
        dusk="logout"
        v-on:click.prevent="logout('/login')"
    />
</user>
