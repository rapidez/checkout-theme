<x-rapidez-ct::card.inactive v-if="!$root.loggedIn">
    <x-rapidez-ct::title.lg>
        @lang('Create account')
    </x-rapidez-ct::title.lg>
    <graphql-mutation
        v-cloak
        query="mutation customer ($firstname: String!, $lastname: String!, $email: String!, $password: String) { createCustomerV2 ( input: { firstname: $firstname, lastname: $lastname, email: $email, password: $password } ) { customer { email } } }"
        :variables="{
            firstname: order.customer_firstname,
            lastname: order.customer_lastname,
            email: order.customer_email
        }"
        :callback="registerCallback"
        :notify="{ message: '@lang('Account registration successful.')' }"
    >
        <form
            class="mt-5 grid items-end gap-5 sm:grid-cols-2"
            slot-scope="{ mutate, variables, mutating }"
            v-on:submit.prevent="mutate"
        >
            <x-rapidez-ct::input
                name="email"
                type="email"
                label="Email"
                v-bind:value="order.customer_email"
                disabled
            />
            <div class="text-sm max-sm:order-first">
                @lang('No account yet? Create an account and benefit instantly from repeat orders, order statuses and easy returns!')
            </div>
            <x-rapidez-ct::input.password
                name="password"
                label="Password"
                v-model="variables.password"
                required
            />
            <x-rapidez-ct::button.accent class="self-end justify-self-start" loader>
                @lang('Create account')
            </x-rapidez-ct::button.accent>
        </form>
    </graphql-mutation>
</x-rapidez-ct::card.inactive>
<x-rapidez-ct::card.inactive v-else>
    <x-rapidez-ct::title.lg>
        @lang('Already logged in')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::button.enhanced class="mt-5" href="{{ route('account.overview') }}">
        @lang('Go to your account')
    </x-rapidez-ct::button.enhanced>
</x-rapidez-ct::card.inactive>
