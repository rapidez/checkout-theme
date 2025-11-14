<user v-slot="{ logout }">
    <x-rapidez-ct::dashboard.item
        :$item
        :$key
        data-testid="logout"
        v-on:click="logout('/')"
    />
</user>
