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
                <span class="text-sm font-medium text-ct-primary">@lang('Yes, I want to subscribe to the newsletter')</span>
                <span class="text-xs font-normal text-ct-inactive">@lang('You will receive this newsletter approximately 2x a year')</span>
                <div class="absolute right-0 top-1/2 -translate-y-1/2 max-sm:hidden">
                    <x-rapidez-ct::newsletter-visual />
                </div>
            </x-slot:slot>
        </x-rapidez-ct::input.checkbox>
    </label>
</x-rapidez-ct::card.inactive>
