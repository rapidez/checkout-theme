<div>
    <div>
        <x-rapidez-ct::title.lg class="mt-5 mb-3">
            @lang('Contact information')
        </x-rapidez-ct::title.lg>
        <div class="flex flex-col space-y-3">
            <div class="flex sm:flex-row flex-col sm:space-x-3">
                <div class="flex-1">
                    <x-rapidez-ct::input name="firstname" label="Firstname" v-model="addressVariables.firstname" required />
                </div>
                @if(Rapidez::config('customer/address/middlename_show', 0))
                    <div class="flex-1">
                        <x-rapidez-ct::input name="middlename" label="Middlename" v-model="addressVariables.middlename" />
                    </div>
                @endif
                <div class="flex-1">
                    <x-rapidez-ct::input name="lastname" label="Lastname" v-model="addressVariables.lastname" required />
                </div>
            </div>
            @if(Rapidez::config('customer/address/telephone_show', 'req'))
                <x-rapidez-ct::input name="telephone" label="Telephone" v-model="addressVariables.telephone" :required="Rapidez::config('customer/address/telephone_show', 'req') == 'req'" />
            @endif

            @if(Rapidez::config('customer/address/company_show', 'opt'))
                <x-rapidez-ct::input name="company" label="Company" v-model="addressVariables.company" :required="Rapidez::config('customer/address/company_show', 'opt') == 'req'" />
            @endif
            @if(Rapidez::config('customer/address/taxvat_show', 0))
                <x-rapidez-ct::input
                    name="vat_id"
                    label="Vat ID"
                    v-model="addressVariables.vat_id"
                    v-on:change="window.app.$emit('vat-change', $event)"
                    :required="Rapidez::config('customer/address/taxvat_show', 0) == 'req'"
                />
            @endif
        </div>
    </div>

    <div>
        <x-rapidez-ct::title.lg class="mt-5 mb-3">
            @lang('Address')
        </x-rapidez-ct::title.lg>
        <div class="flex flex-col space-y-3">
            <div class="flex sm:flex-row flex-col sm:space-x-3">
                <div class="flex-1">
                    <x-rapidez-ct::input name="street[0]" v-model="addressVariables.street[0]" :label="__('Street')" placeholder="" required />
                </div>
                @if(Rapidez::config('customer/address/street_lines', 2) >= 2)
                    <div class="flex-1">
                        <x-rapidez-ct::input
                            name="street[1]"
                            type="number"
                            label="Housenumber"
                            v-model="addressVariables.street[1]"
                            v-on:change="window.app.$emit('postcode-change', addressVariables)"
                            placeholder=""
                        />
                    </div>
                @endif
                @if(Rapidez::config('customer/address/street_lines', 2) >= 3)
                    <div class="flex-1">
                        <x-rapidez-ct::input name="street[2]" label="Addition" v-model="addressVariables.street[2]" placeholder="" />
                    </div>
                @endif
                @if(Rapidez::config('customer/address/street_lines', 2) >= 4)
                    <div class="flex-1">
                        <x-rapidez-ct::input name="street[3]" v-model="addressVariables.street[3]" placeholder="" />
                    </div>
                @endif
            </div>

            <x-rapidez-ct::input
                name="postcode"
                label="Postcode"
                v-model="addressVariables.postcode"
                v-on:change="window.app.$emit('postcode-change', addressVariables)"
                required
            />
            <x-rapidez-ct::input name="city" label="City" v-model="addressVariables.city" required />
            <span class="relative flex flex-col gap-y-1.5 sm:gap-y-2 text-sm !mb-3">
                <x-rapidez-ct::input.country-select
                    name="country_code"
                    label="Country"
                    v-model="addressVariables.country_code"
                    v-on:change="window.app.$emit('postcode-change', addressVariables)"
                    class="w-full"
                    required
                />
            </span>
        </div>
    </div>
</div>
