<x-rapidez::recaptcha location="customer_create"/>
<graphql-mutation
    query="mutation customer ($firstname: String!, $lastname: String!, $email: String!, $password: String, $is_subscribed: Boolean) { createCustomerV2 ( input: { firstname: $firstname, lastname: $lastname, email: $email, password: $password, is_subscribed: $is_subscribed } ) { customer { email } } }"
    redirect="{{ route('account.overview') }}"
    :callback="registerCallback"
    :recaptcha="{{ Rapidez::config('recaptcha_frontend/type_for/customer_create') == 'recaptcha_v3' ? 'true' : 'false' }}"
    v-slot="{ mutate, variables }"
>
    <x-rapidez-ct::sections>
        <x-rapidez-ct::card.inactive>
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
                <x-rapidez-ct::input.password
                    name="password"
                    Label="Password"
                    v-model="variables.password"
                    required
                />
            </form>
        </x-rapidez-ct::card.inactive>

        @include('rapidez-ct::components.newsletter', ['vModel' => 'variables.is_subscribed'])
    </x-rapidez-ct::sections>
</graphql-mutation>
