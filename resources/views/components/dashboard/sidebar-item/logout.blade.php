<user>
    <x-rapidez-ct::dashboard.sidebar-item
        :$item
        :$key
        data-testid="logout"
        slot-scope="{ logout }"
        v-on:click.prevent="logout('/login')"
    />
</user>
