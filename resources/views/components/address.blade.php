@props(['shipping' => false, 'billing' => false, 'check' => false])

<address-card
    {{ $attributes->whereStartsWith('v-') }}
    @if (!$attributes->has('v-bind:shipping')) :shipping="{{ var_export($shipping) }}" @endif
    @if (!$attributes->has('v-bind:billing')) :billing="{{ var_export($billing) }}" @endif
    v-slot="{ address, billing, shipping, isEmpty }"
>
    <div
        {{ $attributes->whereDoesntStartWith('v-')->class('flex flex-col') }}
        v-if="!isEmpty"
    >
        @if ($check)
            <template v-if="{{ $check }}">
                <div class="bg-ct-accent absolute inset-y-0 left-0 w-1 rounded-l"></div>
                <x-heroicon-s-check class="text-ct-accent absolute right-7 top-7 w-5" />
            </template>
        @endif
        <x-rapidez-ct::title.lg class="mb-4 pr-8">
            <template v-if="billing && shipping">@lang('Shipping & billing address')</template>
            <template v-else-if="shipping">@lang('Shipping address')</template>
            <template v-else-if="billing">@lang('Billing address')</template>
            <template v-else>@lang('Address')</template>
        </x-rapidez-ct::title.lg>
        <div class="flex flex-1 flex-wrap justify-between">
            <ul class="flex flex-col gap-1">
                <li
                    v-for="data in address"
                    v-text="data"
                ></li>
            </ul>
            @if (!empty($slot))
                <div class="mt-auto flex flex-col self-end">
                    {{ $slot }}
                </div>
            @endif
        </div>
    </div>
</address-card>
