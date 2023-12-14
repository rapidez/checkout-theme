<template v-if="$root.loggedIn">
    <x-rapidez-ct::newsletter/>
</template>
@if (Rapidez::config('newsletter/subscription/allow_guest_subscribe', 1))
    <template v-else>
        <x-rapidez-ct::newsletter.once email="$root.guestEmail" />
    </template>
@endif
