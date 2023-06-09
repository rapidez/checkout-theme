@props(['shipping' => false, 'billing' => false, 'dynamicType' => false, 'check' => false])

<address-card
    {{ $attributes->whereStartsWith('v-') }}
    @if(!$dynamicType)
        :shipping="{{ var_export($shipping) }}"
        :billing="{{ var_export($billing) }}"
    @endif
    v-slot="{ address, billing, shipping, isEmpty }"
>
    <div {{ $attributes->whereDoesntStartWith('v-')->class('relative') }} v-if="!isEmpty">
        <div class="h-full flex flex-col">
            @if($check)
                <template v-if="{{ $check }}">
                    <div class="absolute w-1 left-0 inset-y-0 rounded-l bg-ct-accent"></div>
                    <x-heroicon-s-check class="absolute w-5 right-7 top-7 text-ct-accent"/>
                </template>
            @endif
            <x-rapidez-ct::title.lg class="mb-4 pr-8">
                <template v-if="billing && shipping">@lang('Shipping & billing address')</template>
                <template v-else-if="shipping">@lang('Shipping address')</template>
                <template v-else-if="billing">@lang('Billing address')</template>
                <template v-else>@lang('Address')</template>
            </x-rapidez-ct::title.lg>
            <div class="flex flex-wrap flex-1 justify-between">
                <ul class="flex flex-col gap-1">
                    <li v-for="data in address" v-text="data"></li>
                </ul>
                @if(!empty($slot))
                    <div class="flex flex-col mt-auto self-end">
                        {{ $slot }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</address-card>
