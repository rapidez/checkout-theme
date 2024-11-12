<template v-if="!$root.loggedIn">
    @include('rapidez-ct::checkout.partials.sections.success.create-account-title')
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
            @include('rapidez-ct::checkout.partials.sections.success.create-account-button')
        </form>
    </graphql-mutation>
</template>
<template v-else>
    @include('rapidez-ct::checkout.partials.sections.success.logged-in')
</template>
