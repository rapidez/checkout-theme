@props(['item' => [], 'key' => ''])
<x-rapidez::tag {{ $attributes->merge([
    'class' => 'flex gap-x-6 rounded border bg-white px-8 py-4 text-left max-sm:flex-col max-sm:gap-y-1 sm:items-center',
    'href' => $item['href'] ?? '',
    'is' => isset($item['href']) ? 'a' : 'button',
]) }}>
    @if ($item['icon'] ?? false)
        <x-icon name="{{ $item['icon'] }}" class="size-6 stroke-2"/>
    @endif
    <div class="flex flex-col gap-y-1">
        @if ($item['heading'] ?? false)
            <strong class="font-medium">
                @lang($item['heading'])
                @if ($key === 'orders')
                    <graphql query="{customer{orders{items{number}}}}">
                        <template v-if="data" slot-scope="{ data }">
                            (@{{ data.customer.orders.items.length ?? 0 }})
                        </template>
                    </graphql>
                @endif
            </strong>
        @endif
        @if ($item['subheading'] ?? false)
            <p class="text-muted">
                @lang($item['subheading'])
            </p>
        @endif
    </div>
</x-rapidez::tag>
