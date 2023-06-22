<x-rapidez-ct::card class="md:w-auto">
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('rapidez-ct::frontend.account.create')
    </x-rapidez-ct::title.lg>
    <p class="mb-5 text-sm">
        @lang('rapidez-ct::frontend.account.cta')
    </p>
    <x-rapidez-ct::button.outline
        class="flex w-fit items-center gap-1"
        href="/register"
    >
        @lang('rapidez-ct::frontend.account.register')
        <x-heroicon-o-arrow-right class="h-4" />
    </x-rapidez-ct::button.outline>
</x-rapidez-ct::card>
