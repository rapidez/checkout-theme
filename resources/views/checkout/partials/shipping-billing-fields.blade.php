<p class="text-lg font-medium mb-5">
    @if($type == 'shipping')
        @lang('Shipping address')
    @else
        @lang('Billing address')
    @endif
</p>
<div class="grid gap-5 sm:grid-cols-4">
    @if(Rapidez::config('customer/address/company_show', 'opt'))
        <x-rapidez-ct::input
            class="sm:col-span-2"
            name="{{ $type }}_country"
            label="Country"
            v-model="checkout.{{ $type }}_address.country_id"
            required
        />
    @endif
    <x-rapidez-ct::input
        class="sm:col-span-2"
        name="{{ $type }}_company"
        label="Company"
        v-model.lazy="checkout.{{ $type }}_address.company"
        :required="Rapidez::config('customer/address/company_show', 'opt') == 'req'"
    />
    <x-rapidez-ct::input
        label="Firstname"
        name="{{ $type }}_firstname"
        v-model.lazy="checkout.{{ $type }}_address.firstname"
        required
    />
    @if(Rapidez::config('customer/address/middlename_show', 0))
        <x-rapidez-ct::input
            name="{{ $type }}_middlename"
            label="Middlename"
            v-model.lazy="checkout.{{ $type }}_address.middlename"
        />
    @endif
    <x-rapidez-ct::input
        class="sm:col-span-2"
        name="{{ $type }}_lastname"
        label="Lastname"
        v-model.lazy="checkout.{{ $type }}_address.lastname"
        required
    />
    @if(Rapidez::config('customer/address/telephone_show', 'req'))
        <x-rapidez-ct::input
            name="{{ $type }}_telephone"
            label="Telephone"
            v-model.lazy="checkout.{{ $type }}_address.telephone"
            :required="Rapidez::config('customer/address/telephone_show', 'req') == 'req'"
        />
    @endif
    <x-rapidez-ct::input
        name="{{ $type }}_postcode"
        label="Postcode"
        v-model.lazy="checkout.{{ $type }}_address.postcode"
        required
    />
    @if(Rapidez::config('customer/address/street_lines', 3) >= 2)
        <x-rapidez-ct::input
            name="{{ $type }}_housenumber"
            label="Housenumber"
            v-model.lazy="checkout.{{ $type }}_address.street[1]"
            required
        />
    @endif
    @if(Rapidez::config('customer/address/street_lines', 3) >= 3)
        <x-rapidez-ct::input
            name="{{ $type }}_addition"
            label="Addition"
            v-model.lazy="checkout.{{ $type }}_address.street[2]"
        />
    @endif
    <x-rapidez-ct::input
        class="sm:col-span-2"
        name="{{ $type }}_street"
        label="Street"
        v-model.lazy="checkout.{{ $type }}_address.street[0]"
        required
    />
    <x-rapidez-ct::input
        class="sm:col-span-2"
        name="{{ $type }}_city"
        label="City"
        v-model.lazy="checkout.{{ $type }}_address.city"
        required
    />
</div>

@if($type == 'shipping')
    <div class="mt-5">
        <x-rapidez-ct::input.checkbox v-model="checkout.hide_billing">
            @lang('My billing and shipping address are the same')
        </x-rapidez-ct::input.checkbox>
    </div>
@endif
