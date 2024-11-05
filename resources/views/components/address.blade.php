@props(['shipping' => false, 'billing' => false, 'check' => false, 'customTitle' => null])

<address-card
    {{ $attributes->whereStartsWith('v-')->merge([
        'v-bind:shipping' => var_export($shipping, true),
        'v-bind:billing' => var_export($billing, true),
    ]) }}
    v-slot="{ company, name, street, city, country, billing, shipping, isEmpty, customTitle, disabled, check }"
>
    <div {{ $attributes->whereDoesntStartWith('v-')->class('flex flex-col') }}>
        <template v-if="!isEmpty">
            <template v-if="check">
                <div class="bg-ct-accent absolute inset-y-0 left-0 w-1 rounded-l"></div>
                <x-heroicon-o-check class="text-ct-accent absolute right-7 top-7 w-5" stroke-width="2.5" />
            </template>
            <template v-else-if="disabled">
                <x-heroicon-o-lock-closed class="absolute right-5 top-5 w-6" />
            </template>
            <x-rapidez-ct::title.lg class="mb-4 pr-8">
                @if($customTitle)
                    @lang($customTitle)
                @else
                    <template v-if="billing && shipping">@lang('Shipping & billing address')</template>
                    <template v-else-if="shipping">@lang('Shipping address')</template>
                    <template v-else-if="billing">@lang('Billing address')</template>
                    <template v-else>@lang('Address')</template>
                @endif
            </x-rapidez-ct::title.lg>
            <div class="flex flex-1 flex-wrap justify-between">
                <ul class="flex flex-col gap-1">
                    <li v-if="company">@{{ company }}</li>
                    <li v-if="name">@{{ name }}</li>
                    <li v-if="street">@{{ street }}</li>
                    <li v-if="city">@{{ city }}</li>
                    <li v-if="country">@{{ country }}</li>
                </ul>
                @if (!empty($slot))
                    <div class="mt-auto flex flex-col self-end">
                        {{ $slot }}
                    </div>
                @endif
            </div>
        </template>
        <template v-else>
            {{ $empty ?? '' }}
        </template>
    </div>
</address-card>
