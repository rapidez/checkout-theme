@props(['type' => 'shipping', 'address' => 'checkout.'.$type.'_address', 'countryKey' => 'country_id'])

<div class="grid gap-4 sm:gap-5 sm:grid-cols-4">
    @if (Rapidez::config('customer/address/company_show', 0) || Rapidez::config('customer/address/taxvat_show', 0))
        <toggler :open="Boolean({{ $address }}.company || {{ $address }}.vat_id)">
            <div slot-scope="{ toggle, isOpen }" class="contents">
                <x-rapidez-ct::input.checkbox
                    class="col-span-full"
                    id="{{ $type }}_isb2b"
                    name="{{ $type }}_isb2b"
                    v-model="isOpen"
                    v-on:click="toggle"
                >
                    @lang('This is a business address')
                </x-rapidez-ct::input.checkbox>

                @if (Rapidez::config('customer/address/company_show', 0))
                    <x-rapidez-ct::input
                        v-cloak
                        v-if="isOpen"
                        class="sm:col-span-2"
                        name="{{ $type }}_company"
                        label="Company"
                        v-model.lazy="{{ $address }}.company"
                        required
                    />
                @endif

                @if(Rapidez::config('customer/address/taxvat_show', 0))
                    <x-rapidez-ct::input
                        v-cloak
                        v-if="isOpen"
                        class="sm:col-span-2"
                        name="{{ $type }}_vat_id"
                        label="Tax ID"
                        v-model.lazy="{{ $address }}.vat_id"
                        :required="Rapidez::config('customer/address/taxvat_show', 0) == 'req'"
                    />
                @endif
            </div>
        </toggler>
    @endif
    <x-rapidez-ct::input.country-select
        class="sm:col-span-2"
        name="{{ $type }}_country"
        label="{{ __('Country') }}"
        v-model="{{ $address }}.{{ $countryKey }}"
        required
    />
    <div class="max-sm:hidden sm:col-span-2"></div>
    <x-rapidez-ct::input
        name="{{ $type }}_firstname"
        label="Firstname"
        v-model.lazy="{{ $address }}.firstname"
        @class([
            'sm:col-span-2' => !Rapidez::config('customer/address/middlename_show', 0),
        ])
        required
    />
    @if (Rapidez::config('customer/address/middlename_show', 0))
        <x-rapidez-ct::input
            name="{{ $type }}_middlename"
            label="Middlename"
            v-model.lazy="{{ $address }}.middlename"
        />
    @endif
    <x-rapidez-ct::input
        class="sm:col-span-2"
        name="{{ $type }}_lastname"
        label="Lastname"
        v-model.lazy="{{ $address }}.lastname"
        required
    />
    @if (Rapidez::config('customer/address/telephone_show', 'req'))
        <x-rapidez-ct::input
            name="{{ $type }}_telephone"
            label="Telephone"
            v-model.lazy="{{ $address }}.telephone"
            :required="Rapidez::config('customer/address/telephone_show', 'req') == 'req'"
        />
    @endif
    <x-rapidez-ct::input
        name="{{ $type }}_postcode"
        label="Postcode"
        v-model.lazy="{{ $address }}.postcode"
        required
    />
    @if (Rapidez::config('customer/address/street_lines', 3) >= 2)
        <x-rapidez-ct::input
            name="{{ $type }}_housenumber"
            label="Housenumber"
            v-model.lazy="{{ $address }}.street[1]"
            type="{{ Rapidez::config('customer/address/street_lines', 3) == 3 ? 'number' : 'text' }}"
            required
        />
    @endif
    @if (Rapidez::config('customer/address/street_lines', 3) >= 3)
        <x-rapidez-ct::input
            name="{{ $type }}_addition"
            label="Addition"
            v-model.lazy="{{ $address }}.street[2]"
        />
    @endif
    <x-rapidez-ct::input
        class="sm:col-span-2"
        name="{{ $type }}_street"
        label="Street"
        v-model.lazy="{{ $address }}.street[0]"
        required
    />
    <x-rapidez-ct::input
        class="sm:col-span-2"
        name="{{ $type }}_city"
        label="City"
        v-model.lazy="{{ $address }}.city"
        required
    />
</div>
