<user>
    <x-rapidez-ct::dashboard.sidebar-item
        :$item
        :$key
        dusk="logout"
        slot-scope="{ logout }"
        v-on:click.prevent="logout('/login')"
    />
</user>
