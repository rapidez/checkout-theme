@props(['id' => uniqId('newsletter-'), 'vModel'])
<x-rapidez-ct::card.inactive>
    <x-rapidez-ct::title.lg class="mb-5">
        @lang('Newsletter')
    </x-rapidez-ct::title.lg>

    @if(!isset($vModel))
        <graphql-mutation
            v-cloak
            query="mutation customer ($is_subscribed: Boolean!) { updateCustomerV2(input: { is_subscribed: $is_subscribed }) { customer { is_subscribed } } }"
            :alert="false"
            :clear="false"
            :variables="{ is_subscribed: data?.customer?.is_subscribed ?? $root.user?.extension_attributes?.is_subscribed ?? false }"
            v-slot="{ mutate, variables }"
        >
    @endif
            <label
                for="{{ $id }}"
                {{ $attributes->class('flex bg-white p-7 cursor-pointer relative rounded border') }}
            >
                <x-rapidez-ct::input.checkbox
                    class="w-full !items-start"
                    id="{{ $id }}"
                    v-model="{{ $vModel ?? 'variables.is_subscribed'}}"
                    v-on:change="{{ isset($vModel) ?: 'mutate();$root.user.extension_attributes.is_subscribed=variables.is_subscribed' }}"
                >
                    <x-slot:slot class="ml-2 flex flex-col gap-1">
                        <span class="text-sm font-medium text-ct-primary">@lang('Yes, I want to subscribe to the newsletter')</span>
                        <span class="text-xs font-normal text-ct-inactive">@lang('You will receive this newsletter approximately 2x a year')</span>
                    </x-slot:slot>
                </x-rapidez-ct::input.checkbox>
            </label>
    @if(!isset($vModel))
        </graphql-mutation>
    @endif
</x-rapidez-ct::card.inactive>
