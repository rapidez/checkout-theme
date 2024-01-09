
<graphql-mutation
    key="address-create"
    query="@include('rapidez::account.partials.queries.address-create')"
    :watch="false"
    :variables="{ street: [], default_billing: true, default_shipping: true }"
    v-slot="{ mutate: createAddress, variables: addressVariables }"
>
    <x-rapidez::recaptcha location="customer_create"/>
    <graphql-mutation
        query="@include('rapidez-ct::account.partials.queries.register-account')"
        redirect="{{ route('account.overview') }}"
        :callback="async (variables, response) => { 
            await registerCallback(variables, response); 
            @if(config('rapidez.checkout-theme.register.create-address'))
                await createAddress();
            @endif
        }"
        :recaptcha="{{ Rapidez::config('recaptcha_frontend/type_for/customer_create') == 'recaptcha_v3' ? 'true' : 'false' }}"
        v-slot="{ mutate, variables }"
    >
        <x-rapidez-ct::sections>
            <x-rapidez-ct::card.inactive>
                <x-rapidez-ct::title.lg class="mb-5">
                    @lang('Register account')
                </x-rapidez-ct::title.lg>
                <form 
                    id="register" 
                    class="grid gap-5 sm:grid-cols-2"
                    @if(config('rapidez.checkout-theme.register.create-address'))
                        v-on:submit.prevent="window.document.getElementById('register-address').reportValidity() && mutate()"
                    @else
                        v-on:submit.prevent="mutate"
                    @endif
                >
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
            @if(config('rapidez.checkout-theme.register.create-address'))
                <x-rapidez-ct::card.inactive>
                    <x-rapidez-ct::title.lg class="mb-5">
                        @lang('Address data')
                    </x-rapidez-ct::title.lg>
                    <form id="register-address">
                        @include('rapidez-ct::account.partials.register-account-address')
                    </form>
                </x-rapidez-ct::card.inactive>
            @endif

            <x-rapidez-ct::newsletter v-model="variables.is_subscribed"/>
        </x-rapidez-ct::sections>
    </graphql-mutation>
</graphql-mutation>