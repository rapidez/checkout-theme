<template v-if="!window.app?.config?.globalProperties?.loggedIn?.value">
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
        v-slot="{ mutate, variables, mutating }"
    >
        <form
            class="mt-5 grid items-end gap-5 sm:grid-cols-2"
            v-on:submit.prevent="mutate"
        >
            <label>
                <x-rapidez::label>@lang('Email')</x-rapidez::label>
                <x-rapidez::input
                    name="email"
                    type="email"
                    v-bind:value="order.customer_email"
                    disabled
                />
            </label>
            <div class="text-sm max-sm:order-first">
                @lang('No account yet? Create an account and benefit instantly from repeat orders, order statuses and easy returns!')
            </div>
            <label>
                <x-rapidez::label>@lang('Password')</x-rapidez::label>
                <x-rapidez::input.password
                    name="password"
                    v-model="variables.password"
                    required
                />
            </label>
            @include('rapidez-ct::checkout.partials.sections.success.create-account-button')
        </form>
    </graphql-mutation>
</template>
<template v-else>
    @include('rapidez-ct::checkout.partials.sections.success.logged-in')
</template>
