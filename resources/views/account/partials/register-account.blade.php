<x-rapidez::recaptcha location="customer_create"/>
<graphql-mutation
    query="mutation customer ($firstname: String!, $lastname: String!, $email: String!, $password: String, $taxvat: String) { createCustomerV2 ( input: { firstname: $firstname, lastname: $lastname, email: $email, password: $password, taxvat: $taxvat } ) { customer { email } } }"
    redirect="{{ route('account.overview') }}"
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
            <x-rapidez-ct::input.password
                name="password"
                Label="Password"
                v-model="variables.password"
                required
            />
            @if(Rapidez::config('customer/create_account/vat_frontend_visibility', 0))
                <toggler>
                    <div slot-scope="{ toggle, isOpen }" class="contents">
                        <x-rapidez-ct::input.checkbox
                            id="isb2b"
                            name="isb2b"
                            v-model="isOpen"
                            v-on:click="toggle"
                        >
                            @lang('This is a business account')
                        </x-rapidez-ct::input.checkbox>
                        <x-rapidez-ct::input
                            v-cloak
                            v-if="isOpen"
                            name="taxvat"
                            label="Vat ID"
                            type="text"
                            v-model="variables.taxvat"
                            required
                        />
                        </div>
                    </toggler>
                @endif
        </form>
    </x-rapidez-ct::card.inactive>
</graphql-mutation>
