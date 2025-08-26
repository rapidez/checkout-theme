
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
                    class="grid gap-5 md:grid-cols-2"
                    @if(config('rapidez.checkout-theme.register.create-address'))
                        v-on:submit.prevent="window.document.getElementById('register-address').reportValidity() && mutate()"
                    @else
                        v-on:submit.prevent="mutate"
                    @endif
                >
                    <label>
                        <x-rapidez::label>@lang('Firstname')</x-rapidez::label>
                        <x-rapidez::input
                            name="firstname"
                            type="text"
                            v-model="variables.firstname"
                            required
                            data-testid="firstname-input"
                        />
                    </label>
                    <label>
                        <x-rapidez::label>@lang('Lastname')</x-rapidez::label>
                        <x-rapidez::input
                            name="lastname"
                            type="text"
                            v-model="variables.lastname"
                            required
                            data-testid="lastname-input"
                        />
                    </label>
                    <label>
                        <x-rapidez::label>@lang('Email')</x-rapidez::label>
                        <x-rapidez::input
                            name="email"
                            type="email"
                            v-model="variables.email"
                            required
                            data-testid="email-input"
                        />
                    </label>
                    <label>
                        <x-rapidez::label>@lang('Password')</x-rapidez::label>
                        <x-rapidez::input.password
                            name="password"
                            v-model="variables.password"
                            required
                            data-testid="password-input"
                        />
                    </label>

                    @if(Rapidez::config('customer/create_account/vat_frontend_visibility', 0))
                        <toggler>
                            <div slot-scope="{ toggle, isOpen }" class="contents">
                                <x-rapidez::input.checkbox
                                    id="isb2b"
                                    name="isb2b"
                                    v-model="isOpen"
                                    v-on:click="toggle"
                                    data-testid="b2b-checkbox"
                                >
                                    @lang('This is a business account')
                                </x-rapidez::input.checkbox>
                                <label v-if="isOpen" v-cloak>
                                    <x-rapidez::label>@lang('Vat ID')</x-rapidez::label>
                                    <x-rapidez::input
                                        name="taxvat"
                                        type="text"
                                        v-model="variables.taxvat"
                                        v-on:change="window.app.$emit('vat-change', $event)"
                                        required
                                        data-testid="taxvat-input"
                                    />
                                </label>
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

            @if (Rapidez::config('newsletter/general/active', 1))
                <x-rapidez-ct::card.inactive>
                    <x-rapidez-ct::newsletter v-model="variables.is_subscribed"/>
                </x-rapidez-ct::card.inactive>
            @endif
        </x-rapidez-ct::sections>
    </graphql-mutation>
</graphql-mutation>
