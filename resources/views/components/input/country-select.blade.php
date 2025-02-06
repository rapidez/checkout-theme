@props(['label' => ''])
<graphql query="{ countries { two_letter_abbreviation full_name_locale } }" cache="countries">
    <template v-if="data" slot-scope="{ data }">
        <x-rapidez-ct::input.select :$label {{ $attributes }}>
            <option v-for="country in data.countries.sort((a, b) => a.full_name_locale.localeCompare(b.full_name_locale))" :value="country.two_letter_abbreviation.toUpperCase()">
                @{{ country.full_name_locale }}
            </option>
        </x-rapidez-ct::input.select>
    </template>
</graphql>
