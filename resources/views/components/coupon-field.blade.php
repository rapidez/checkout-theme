<div {{ $attributes->merge(['class' => 'flex w-full flex-row gap-x-3']) }}>
    <x-rapidez-ct::input
        class="text-ct-primary w-60"
        name="couponCode"
        :placeholder="__('Enter code') . '...'"
        v-on="inputEvents"
        v-bind:value="couponCode"
        v-bind:disabled="$root.loading"
        required
    />
    <x-rapidez-ct::button.outline type="submit" loader>
        @lang('Apply')
    </x-rapidez-ct::button.outline>
</div>
