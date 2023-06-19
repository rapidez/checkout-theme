@props(['item' => [], 'key' => ''])
<component
    class="flex flex-wrap items-center gap-x-6 rounded border bg-white px-8 py-4 text-left"
    href="{{ $item['href'] ?? '' }}"
    is="{{ isset($item['href']) ? 'a' : 'button' }}"
    {{ $attributes }}
>
    @if ($item['icon'] ?? false)
        <x-icon
            class="h-6 stroke-[1.5px]"
            name="{{ $item['icon'] }}"
        />
    @endif
    <div class="flex flex-col gap-y-1">
        @if ($item['heading'] ?? false)
            <strong class="font-medium">
                {{ $item['heading'] }}
                @if ($key === 'orders')
                    <graphql query="{customer{orders{items{number}}}}">
                        <span
                            slot-scope="{ data }"
                            v-if="data"
                        >
                            (@{{ data.customer.orders.items.length ?? 0 }})
                        </span>
                    </graphql>
                @endif
            </strong>
        @endif
        @if ($item['subheading'] ?? false)
            <p class="text-inactive">
                {{ $item['subheading'] }}
            </p>
        @endif
    </div>
    <x-heroicon-o-chevron-right class="ml-auto h-4" />
</component>
