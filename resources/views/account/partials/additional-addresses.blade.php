<graphql query="{ customer { addresses { id firstname middlename lastname street city postcode country_code telephone default_billing default_shipping } } }" v-slot="{ data }">
    <div v-if="data">
        <div :set="data.customer.additionalAddresses = data.customer.addresses.filter(a => a.default_billing == false && a.default_shipping == false)">
            <h2 class="mt-4 mb-2 text-lg font-medium">@lang('Additional address entries')</h2>
            <div v-if="data?.customer?.additionalAddresses?.length" class="w-full overflow-auto">
                <table class="bg-white border p-2 w-full table-auto text-left">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">@lang('Firstname')</th>
                            @if (Rapidez::config('customer/address/middlename_show', 0))
                                <th class="px-4 py-2">@lang('Middlename')</th>
                            @endif
                            <th class="px-4 py-2">@lang('Lastname')</th>
                            <th class="px-4 py-2">@lang('Address')</th>
                            <th class="px-4 py-2">@lang('Postcode')</th>
                            <th class="px-4 py-2">@lang('City')</th>
                            <th class="px-4 py-2">@lang('Region')</th>
                            <th class="px-4 py-2">@lang('Country')</th>
                            <th class="px-4 py-2">@lang('Phone')</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="additionalAddress in data.customer.additionalAddresses">
                            <td class="border-t px-4 py-2">@{{ additionalAddress.firstname }}</td>
                            @if (Rapidez::config('customer/address/middlename_show', 0))
                                <td class="border-t px-4 py-2">@{{ additionalAddress.middlename }}</td>
                            @endif
                            <td class="border-t px-4 py-2">@{{ additionalAddress.lastname }}</td>
                            <td class="border-t px-4 py-2">@{{ additionalAddress.street[0] }} @{{ additionalAddress.street[1] }} @{{ additionalAddress.street[2] }} @{{ additionalAddress.street[3] }}</td>
                            <td class="border-t px-4 py-2">@{{ additionalAddress.postcode }}</td>
                            <td class="border-t px-4 py-2">@{{ additionalAddress.city }}</td>
                            <td class="border-t px-4 py-2">@{{ additionalAddress.region?.region }}</td>
                            <td class="border-t px-4 py-2">@{{ additionalAddress.country_code }}</td>
                            @if (Rapidez::config('customer/address/telephone_show', 'opt'))
                                <td class="border-t px-4 py-2">@{{ additionalAddress.telephone }}</td>
                            @endif
                            <td class="border-t px-4 py-2">
                                <a :href="'/account/address/' + additionalAddress.id | url" data-testid="address-edit">
                                    <x-heroicon-o-pencil-square class="size-4 shrink-0" />
                                </a>
                            </td>
                            <td class="border-t px-4 py-2">
                                <graphql-mutation
                                    query="mutation deleteCustomerAddress($id: Int!){ deleteCustomerAddress ( id: $id ) }"
                                    :variables="{ id: additionalAddress.id }"
                                    :callback="refreshUserInfoCallback"
                                    redirect="{{ route('account.edit') }}"
                                >
                                    <div class="flex items-center size-4" slot-scope="{ mutate }">
                                        <button v-on:click="mutate" data-testid="address-delete">
                                            <x-heroicon-o-trash class="size-4 shrink-0 text-red-600" />
                                        </button>
                                    </div>
                                </graphql-mutation>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div v-else>
                @lang('You have no other address entries in your address book.')
            </div>

            <x-rapidez::button.secondary :href="route('account.address.create')" class="mt-5">
                @lang('Add new address')
            </x-rapidez::button.secondary>
        </div>
    </div>
</graphql>