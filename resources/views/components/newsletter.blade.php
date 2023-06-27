@props(['id' => uniqId('newsletter-')])
<x-rapidez-ct::card.inactive>
    <x-rapidez-ct::title.lg class="mb-5">
        @lang('Newsletter')
    </x-rapidez-ct::title.lg>
    <label
        for="{{ $id }}"
        {{ $attributes->class('flex bg-white p-7 cursor-pointer relative rounded border') }}
    >
        <x-rapidez-ct::input.checkbox
            class="w-full !items-start"
            id="{{ $id }}"
        >
            <x-slot:slot class="ml-2 flex flex-col gap-1">
                <span class="text-ct-primary text-sm font-medium">@lang('Yes, I want to subscribe to the newsletter')</span>
                <span class="text-ct-inactive text-xs font-normal">@lang('You will receive this newsletter approximately 2x a year')</span>
                <x-rapidez-ct::newsletter-visual />
            </x-slot:slot>
        </x-rapidez-ct::input.checkbox>
    </label>
</x-rapidez-ct::card.inactive>
