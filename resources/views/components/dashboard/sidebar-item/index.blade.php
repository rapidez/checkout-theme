@props(['item' => [], 'key' => ''])
<component
    href="{{ $item['href'] ?? '' }}"
    is="{{ isset($item['href']) ? 'a' : 'button' }}"
    {{ $attributes }}
    @class([
        '' => request()->is(substr($item['href'] ?? '/#', 1) . '*'),
        'flex-1 text-left',
    ])
>
    @lang($item['heading'] ?? '')
    @if ($key === 'orders')
        <graphql query="{customer{orders{items{number}}}}">
            <template
                slot-scope="{ data }"
                v-if="data"
            >
                (@{{ data.customer.orders.items.length ?? 0 }})
            </template>
        </graphql>
    @endif
    <x-heroicon-o-chevron-right class="h-4" />
</component>
