@props(['id' => uniqId('newsletter-'), 'email' => "''"])

<x-rapidez-ct::card.inactive class="relative">
    <x-rapidez-ct::title.lg class="mb-5">
        @lang('Newsletter')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::newsletter-visual />
    <graphql-mutation
        v-cloak
        query="mutation visitor ($email: String!) { subscribeEmailToNewsletter(email: $email) { status } }"
        :variables="{ email: {{ $email }} }"
        :clear="true"
        :notify="{ message: '@lang('Thank you for subscribing')', type: 'success' }"
    >
        <template slot-scope="{ mutate, variables, mutated, mutating, error }">
            <x-rapidez-ct::newsletter.partials.input />
        </template>
    </graphql-mutation>
</x-rapidez-ct::card.inactive>
