@props(['isPartOfAnotherForm' => false, 'id'])

<x-rapidez-ct::input.checkbox.tile :attributes="$attributes->merge([
    'class' => 'relative flex w-full cursor-pointer !items-start rounded border bg-white p-7',
    'id' => $id,
])" v-on:change="() => {
        if (typeof mutate === 'function' && (!{{ (int)$isPartOfAnotherForm }})) { mutate() }
        if ($root.loggedIn) { $root.user.extension_attributes.is_subscribed={{ $attributes->get('v-model') }} }
    }">
    <x-slot:slot class="flex flex-col gap-1">
        <span class="text-ct-primary text-sm font-medium">@lang('Yes, I want to subscribe to the newsletter')</span>
        <span class="text-ct-inactive text-xs font-normal">@lang('You will receive this newsletter approximately 2x a year')</span>
        <x-rapidez-ct::newsletter-visual />
    </x-slot:slot>
</x-rapidez-ct::input.checkbox.tile>
