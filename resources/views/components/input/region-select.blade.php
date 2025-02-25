@props(['label' => '', 'country' => '', 'placeholderClass' => ''])
<graphql
    v-if="{{ $country }}"
    query="query country($id: String) { country(id: $id) { available_regions { code id name } } }"
    v-bind:variables="{ id: {{ $country }} }"
    v-bind:cache="'regions_' + {{ $country }}"
    v-bind:key="{{ $country }}"
>
    <div class="contents" slot-scope="{ data }">
        <template v-if="data && data.country.available_regions">
            <x-rapidez-ct::input.select
                :$label
                {{ $attributes }}
                v-if="{{ Rapidez::config('general/region/display_all', '0') }} || '{{ Rapidez::config('general/region/state_required') }}'.split(',').includes({{ $country }})"
                v-bind:required="'{{ Rapidez::config('general/region/state_required') }}'.split(',').includes({{ $country }})"
            >
                <option v-for="region in data.country.available_regions" :value="region.id">
                    @{{ region.name }}
                </option>
            </x-rapidez-ct::input.select>
        </template>
        @if ($placeholderClass)
            <template v-else>
                <div class="{{ $placeholderClass }}"></div>
            </template>
        @endif
    </div>
</graphql>
