<x-rapidez-ct::title.lg class="mb-4">
    @lang('Register within 1 minute')
</x-rapidez-ct::title.lg>
<p class="mb-5 text-sm">
    @lang('Don\'t have an account yet? Create an account and enjoy faster ordering, repeat orders, status of your order, easy returns and more!')
</p>
<x-rapidez::button.outline :href="route('account.register')" class="flex w-fit items-center gap-1">
    @lang('Register')
    <x-heroicon-o-arrow-right class="size-4" />
</x-rapidez::button.outline>
