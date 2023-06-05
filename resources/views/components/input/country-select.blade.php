@props(['label' => ''])
<graphql
    query="{ countries { two_letter_abbreviation full_name_locale } }"
    cache="countries"
>
    <template
        v-if="data"
        slot-scope="{ data }"
    >
        <x-rapidez-ct::input.select
            :$label
            {{ $attributes }}
        >
            <option
                v-for="country in data.countries"
                :value="country.two_letter_abbreviation.toUpperCase()"
            >
                @{{ country.full_name_locale }}
            </option>
        </x-rapidez-ct::input.select>
    </template>
</graphql>
