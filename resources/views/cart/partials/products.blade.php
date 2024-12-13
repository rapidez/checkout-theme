<table class="w-full border-b">
    <thead class="bg flex rounded md:table-header-group">
        <tr class="text-xs *:py-4 *:font-normal *:px-5">
            <th class="!pl-0 max-md:hidden"></th>
            <th class="text-start">@lang('Product')</th>
            <th class="text-start max-md:hidden">@lang('Price')</th>
            <th class="!text-center max-md:hidden">@lang('Amount')</th>
            <th class="text-end max-md:hidden">@lang('Subtotal')</th>
        </tr>
    </thead>
    <tbody class="divide-y">
        <tr v-for="(item, index) in cart.items" v-if="cart.items" class="relative flex flex-wrap gap-y-5 py-5 md:table-row md:*:p-5">
            @include('rapidez-ct::cart.partials.product.image')
            @include('rapidez-ct::cart.partials.product.description')
            @include('rapidez-ct::cart.partials.product.price')
        </tr>
    </tbody>
</table>
