@props(['email', 'message'])

<graphql-mutation
    v-cloak
    query="mutation visitor ($email: String!) { subscribeEmailToNewsletter(email: $email) { status } }"
    :variables="{ email: {!! $email !!} }"
    :clear="true"
    @isset ($message)
        :notify="{ message: '{!! $message !!}', type: 'success' }"
    @endisset
>
    <template slot-scope="{ mutate, variables, mutated, mutating, error }">
        <form
            class="relative flex gap-3 flex-wrap items-end w-full z-10"
            v-on:submit.prevent="mutate"
        >
            {{ $slot }}
        </form>
    </template>
</graphql-mutation>