@props(['item' => [], 'key' => ''])
<x-rapidez::tag {{ $attributes->merge([
    'class' => 'flex-1 text-left',
    'is' => isset($item['href']) ? 'a' : 'button',
    'href' => $item['href'] ?? '',
]) }}>
    @lang($item['heading'] ?? '')
    @if ($key === 'orders')
        <graphql query="{customer{orders{items{number}}}}">
            <template v-if="data" slot-scope="{ data }">
                (@{{ data.customer.orders.items.length ?? 0 }})
            </template>
        </graphql>
    @endif
    <x-heroicon-o-chevron-right class="size-4" />
</x-rapidez::tag>
