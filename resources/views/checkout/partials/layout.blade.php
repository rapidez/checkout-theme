<x-rapidez-ct::layout class="mt-8 sm:mt-14">
    <template v-if="checkout.step == 2 && $root.cart?.total_quantity">
        @include('rapidez-ct::checkout.steps.credentials')
    </template>

    <template v-if="checkout.step == 3">
        @include('rapidez-ct::checkout.steps.payment')
    </template>

    <template v-if="checkout.step == 4">
        @include('rapidez-ct::checkout.steps.success')
    </template>

    <x-slot:sidebar>
        @include('rapidez-ct::checkout.partials.sidebar.sidebar')
    </x-slot:sidebar>
</x-rapidez-ct::layout>
