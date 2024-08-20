@props(['id' => uniqId('newsletter-'), 'hasData' => false])

<x-rapidez-ct::card.inactive>
    <x-rapidez-ct::title.lg class="mb-5">
        @lang('Newsletter')
    </x-rapidez-ct::title.lg>

    @if (!$attributes->has('v-model'))
        @php
            $subscribedData = $hasData
                ? 'data?.customer?.is_subscribed ?? $root.user?.extension_attributes?.is_subscribed ?? false'
                : '$root.user?.extension_attributes?.is_subscribed ?? false'
        @endphp
        <graphql-mutation
            v-cloak
            query="mutation subscribeNewsletter ($is_subscribed: Boolean!) { updateCustomerV2(input: { is_subscribed: $is_subscribed }) { customer { is_subscribed } } }"
            :alert="false"
            :clear="false"
            :variables="{ is_subscribed: {{ $subscribedData }} }"
            v-slot="{ mutate, variables }"
        >
    @endif

    <x-rapidez-ct::newsletter.partials.checkbox
        :v-model="$attributes->has('v-model') ? $attributes['v-model'] : 'variables.is_subscribed'"
        :isPartOfAnotherForm="$attributes->has('v-model')"
        :$id
    />

    @if (!$attributes->has('v-model'))
        </graphql-mutation>
    @endif
</x-rapidez-ct::card.inactive>
