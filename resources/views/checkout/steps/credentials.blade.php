<div class="flex justify-between items-baseline">
    <x-rapidez-ct::title>
        @lang('Credentials')
    </x-rapidez-ct::title>
    <x-rapidez-ct::progress-bar />
</div>

<form id="credentials" v-on:submit.prevent="save(['credentials'], 3)">
    <x-rapidez-ct::sections>
        @include('rapidez-ct::checkout.partials.sections.login')
        @include('rapidez-ct::checkout.partials.sections.address')
        @include('rapidez-ct::checkout.partials.sections.shipping')
    </x-rapidez-ct::sections>
</form>

<x-rapidez-ct::button.enhanced form="credentials">
    @lang('Next')
</x-rapidez-ct::button.enhanced>
