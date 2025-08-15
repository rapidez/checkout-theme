@props(['type' => 'shipping', 'address' => 'variables', 'countryKey' => 'country_code', 'region' => 'region_id', 'showList' => false])

<div class="grid gap-4 md:gap-5 md:grid-cols-4">
    @if ($showList)
        <div class="col-span-full" v-if="$root.loggedIn">
            <graphql query="{ customer { addresses { id firstname lastname street city postcode country_code } } }">
                <div v-if="data" slot-scope="{ data }">
                    <x-rapidez::input.select v-model="variables.customer_address_id" dusk="{{ $type }}_address_select">
                        <option v-for="address in data.customer.addresses" :value="address.id">
                            @{{ address.firstname }} @{{ address.lastname }}
                            - @{{ address.street[0] }} @{{ address.street[1] }} @{{ address.street[2] }}
                            - @{{ address.postcode }}
                            - @{{ address.city }}
                            - @{{ address.country_code }}
                        </option>
                        <option :value="null">@lang('New address')</option>
                    </x-rapidez::input.select>
                </div>
            </graphql>
        </div>
    @endif

    <div class="contents" v-if="!$root.loggedIn || !variables.customer_address_id">
        @if (Rapidez::config('customer/address/company_show', 'opt') || Rapidez::config('customer/address/taxvat_show', 0))
            @if (Rapidez::config('customer/address/company_show', 'opt'))
                <label class="sm:col-span-2">
                    <x-rapidez::label>@lang('Company')</x-rapidez::label>
                    <x-rapidez::input
                        name="{{ $type }}_company"
                        v-model.lazy="{{ $address }}.company"
                    />
                </label>
            @endif

            @if(Rapidez::config('customer/address/taxvat_show', 0))
                <label class="sm:col-span-2">
                    <x-rapidez::label>@lang('Tax ID')</x-rapidez::label>
                    <x-rapidez::input
                        name="{{ $type }}_vat_id"
                        v-model.lazy="{{ $address }}.vat_id"
                        v-on:change="window.app.$emit('vat-change', $event)"
                        :required="Rapidez::config('customer/address/taxvat_show', 0) == 'req'"
                    />
                </label>
            @endif
        @endif
        <label class="sm:col-span-2">
            <x-rapidez::label>@lang('Country')</x-rapidez::label>
            <x-rapidez::input.select.country
                name="{{ $type }}_country"
                v-model="{{ $address }}.{{ $countryKey }}"
                v-on:change="() => {
                    {{ $address }}.region = {};
                    {{ $address }}.{{ $region }} = null;
                }"
                required
            />
        </label>
        <label class="sm:col-span-2 has-[.exists]:block hidden">
            <x-rapidez::label>@lang('Region')</x-rapidez::label>
            <x-rapidez::input.select.region
                class="exists"
                name="{{ $type }}_region"
                v-model="{{ $address }}.{{ $region }}"
                country="{{ $address }}.{{ $countryKey }}"
            />
        </label>
        <div class="max-sm:hidden sm:col-span-2"></div>
        <label @class([ 'sm:col-span-2' => !Rapidez::config('customer/address/middlename_show', 0)])>
            <x-rapidez::label>@lang('Firstname')</x-rapidez::label>
            <x-rapidez::input
                name="{{ $type }}_firstname"
                v-model.lazy="{{ $address }}.firstname"
                required
            />
        </label>
        @if (Rapidez::config('customer/address/middlename_show', 0))
            <label>
                <x-rapidez::label>@lang('Middlename')</x-rapidez::label>
                <x-rapidez::input
                    name="{{ $type }}_middlename"
                    v-model.lazy="{{ $address }}.middlename"
                />
            </label>
        @endif
        <label class="sm:col-span-2">
            <x-rapidez::label>@lang('Lastname')</x-rapidez::label>
            <x-rapidez::input
                name="{{ $type }}_lastname"
                v-model.lazy="{{ $address }}.lastname"
                required
            />
        </label>
        @if (Rapidez::config('customer/address/telephone_show', 'req'))
            <label>
                <x-rapidez::label>@lang('Telephone')</x-rapidez::label>
                <x-rapidez::input
                    name="{{ $type }}_telephone"
                    v-model.lazy="{{ $address }}.telephone"
                    :required="Rapidez::config('customer/address/telephone_show', 'req') == 'req'"
                />
            </label>
        @endif
        <label>
            <x-rapidez::label>@lang('Postcode')</x-rapidez::label>
            <x-rapidez::input
                name="{{ $type }}_postcode"
                v-model.lazy="{{ $address }}.postcode"
                v-on:change="window.app.$emit('postcode-change', {{ $address }})"
                required
            />
        </label>
        @if (Rapidez::config('customer/address/street_lines', 3) >= 2)
            <label>
                <x-rapidez::label>@lang('Housenumber')</x-rapidez::label>
                <x-rapidez::input
                    name="{{ $type }}_housenumber"
                    v-model.lazy="{{ $address }}.street[1]"
                    v-on:change="window.app.$emit('postcode-change', {{ $address }})"
                    type="{{ Rapidez::config('customer/address/street_lines', 3) == 3 ? 'number' : 'text' }}"
                    required
                />
            </label>
        @endif
        @if (Rapidez::config('customer/address/street_lines', 3) >= 3)
            <label>
                <x-rapidez::label>@lang('Addition')</x-rapidez::label>
                <x-rapidez::input
                    name="{{ $type }}_addition"
                    v-model.lazy="{{ $address }}.street[2]"
                />
            </label>
        @endif
        <label class="sm:col-span-2">
            <x-rapidez::label>@lang('Street')</x-rapidez::label>
            <x-rapidez::input
                name="{{ $type }}_street"
                v-model.lazy="{{ $address }}.street[0]"
                required
            />
        </label>
        <label class="sm:col-span-2">
            <x-rapidez::label>@lang('City')</x-rapidez::label>
            <x-rapidez::input
                name="{{ $type }}_city"
                v-model.lazy="{{ $address }}.city"
                required
            />
        </label>
    </div>
</div>