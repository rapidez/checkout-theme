<x-rapidez::recaptcha location="customer_create"/>
<graphql-mutation
    v-cloak
    query="mutation customer ($firstname: String!, $lastname: String!, $email: String!, $password: String) { createCustomerV2 ( input: { firstname: $firstname, lastname: $lastname, email: $email, password: $password } ) { customer { email } } }"
    redirect="/account"
    :callback="registerCallback"
    :recaptcha="{{ Rapidez::config('recaptcha_frontend/type_for/customer_create') == 'recaptcha_v3' ? 'true' : 'false' }}"
>
    <x-rapidez-ct::card.inactive slot-scope="{ mutate, variables }">
        <x-rapidez-ct::title.lg class="mb-5">
            @lang('Register account')
        </x-rapidez-ct::title.lg>
        <form id="register" class="grid gap-5 sm:grid-cols-2" v-on:submit.prevent="mutate">
            <x-rapidez-ct::input
                name="firstname"
                label="Firstname"
                type="text"
                v-model="variables.firstname"
                required
            />
            <x-rapidez-ct::input
                name="lastname"
                label="Lastname"
                type="text"
                v-model="variables.lastname"
                required
            />
            <x-rapidez-ct::input
                name="email"
                label="Email"
                type="email"
                v-model="variables.email"
                required
            />
            <x-rapidez-ct::input
                name="password"
                Label="Password"
                type="password"
                v-model="variables.password"
                required
            />
        </form>
    </x-rapidez-ct::card.inactive>
</graphql-mutation>
