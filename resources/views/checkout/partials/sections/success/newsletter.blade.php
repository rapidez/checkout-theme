<template v-if="user.is_logged_in">
    <x-rapidez-ct::newsletter/>
</template>
@if (Rapidez::config('newsletter/subscription/allow_guest_subscribe', 1))
    <template v-else>
        <x-rapidez-ct::newsletter.input email="order.email" />
    </template>
@endif
