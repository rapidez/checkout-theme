@props(['id' => uniqId('newsletter-')])
<label
    for="{{ $id }}"
    {{ $attributes->class('flex bg-white p-7 cursor-pointer relative rounded border') }}
>
    <x-rapidez-ct::input.checkbox
        class="!items-start"
        id="{{ $id }}"
    >
        <x-slot:slot class="ml-2 flex flex-col gap-1">
            <span class="text-sm font-medium text-ct-primary">@lang('Yes, I want to subscribe to the newsletter')</span>
            <span class="text-xs font-normal text-ct-inactive">@lang('You will receive this newsletter approximately 2x a year')</span>
        </x-slot:slot>
    </x-rapidez-ct::input.checkbox>
</label>
