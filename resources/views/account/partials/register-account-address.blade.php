<div>
    <div>
        <x-rapidez-ct::title.lg class="mt-5 mb-3">
            @lang('Contact information')
        </x-rapidez-ct::title.lg>
        <div class="flex flex-col space-y-3">
            <div class="flex sm:flex-row flex-col sm:space-x-3">
                <div class="flex-1">
                    <label>
                        <x-rapidez::label>@lang('Firstname')</x-rapidez::label>
                        <x-rapidez::input name="firstname" v-model="addressVariables.firstname" required />
                    </label>
                </div>
                @if(Rapidez::config('customer/address/middlename_show', 0))
                    <div class="flex-1">
                        <label>
                            <x-rapidez::label>@lang('Middlename')</x-rapidez::label>
                            <x-rapidez::input name="middlename" v-model="addressVariables.middlename" />
                        </label>
                    </div>
                @endif
                <div class="flex-1">
                    <label>
                        <x-rapidez::label>@lang('Lastname')</x-rapidez::label>
                        <x-rapidez::input name="lastname" v-model="addressVariables.lastname" required />
                    </label>
                </div>
            </div>
            @if(Rapidez::config('customer/address/telephone_show', 'req'))
                <label>
                    <x-rapidez::label>@lang('Telephone')</x-rapidez::label>
                    <x-rapidez::input name="telephone" v-model="addressVariables.telephone" :required="Rapidez::config('customer/address/telephone_show', 'req') == 'req'" />
                </label>
            @endif

            @if(Rapidez::config('customer/address/company_show', 'opt'))
                <label>
                    <x-rapidez::label>@lang('Company')</x-rapidez::label>
                    <x-rapidez:input name="company" v-model="addressVariables.company" :required="Rapidez::config('customer/address/company_show', 'opt') == 'req'" />
                </label>
            @endif
            @if(Rapidez::config('customer/address/taxvat_show', 0))
                <label>
                    <x-rapidez::label>@lang('Vat ID')</x-rapidez::label>
                    <x-rapidez::input
                        name="vat_id"
                        v-model="addressVariables.vat_id"
                        v-on:change="window.app.$emit('vat-change', $event)"
                        :required="Rapidez::config('customer/address/taxvat_show', 0) == 'req'"
                    />
                </label>
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
                    <label>
                        <x-rapidez::label>@lang('Street')</x-rapidez::label>
                        <x-rapidez::input name="street[0]" v-model="addressVariables.street[0]" required />
                    </label>
                </div>
                @if(Rapidez::config('customer/address/street_lines', 2) >= 2)
                    <div class="flex-1">
                        <label>
                            <x-rapidez::label>@lang('Housenumber')</x-rapidez::label>
                            <x-rapidez::input
                                name="street[1]"
                                type="number"
                                v-model="addressVariables.street[1]"
                                v-on:change="window.app.$emit('postcode-change', addressVariables)"
                            />
                        </label>
                    </div>
                @endif
                @if(Rapidez::config('customer/address/street_lines', 2) >= 3)
                    <div class="flex-1">
                        <label>
                            <x-rapidez::label>@lang('Addition')</x-rapidez::label>
                            <x-rapidez::input name="street[2]" v-model="addressVariables.street[2]" />

                        </label>
                    </div>
                @endif
                @if(Rapidez::config('customer/address/street_lines', 2) >= 4)
                    <div class="flex-1">
                        <x-rapidez::input name="street[3]" v-model="addressVariables.street[3]" />
                    </div>
                @endif
            </div>

            <label>
                <x-rapidez::label>@lang('Postcode')</x-rapidez::label>
                <x-rapidez::input
                    name="postcode"
                    v-model="addressVariables.postcode"
                    v-on:change="window.app.$emit('postcode-change', addressVariables)"
                    required
                />
            </label>
            <label>
                <x-rapidez::label>@lang('City')</x-rapidez::label>
                <x-rapidez::input name="city" v-model="addressVariables.city" required />
            </label>
            <span class="relative flex flex-col gap-y-1.5 sm:gap-y-2 text-sm !mb-3">
                <label>
                    <x-rapidez::label>@lang('Country')</x-rapidez::label>
                    <x-rapidez::input.select.country
                        name="country_code"
                        v-model="addressVariables.country_code"
                        class="w-full"
                        v-on:change="() => {
                            window.app.$emit('postcode-change', addressVariables);
                            addressVariables.region = { region_id: null };
                        }"
                        required
                    />
                </label>
                <label class="sm:col-span-2 has-[.exists]:block hidden">
                    <x-rapidez::label>@lang('Region')</x-rapidez::label>
                    <x-rapidez::input.select.region
                        class="exists"
                        name="region"
                        v-model="addressVariables.region.region_id"
                        country="addressVariables.country_code"
                    />
                </label>
            </span>
        </div>
    </div>
</div>
