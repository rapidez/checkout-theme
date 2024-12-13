<div class="flex flex-wrap gap-3 mt-5">
    <x-rapidez::button.secondary v-on:click.prevent="toggleEdit">
        @lang('Use a new address')
    </x-rapidez::button.secondary>
    <x-rapidez::button.outline tag="label" for="popup" class="cursor-pointer" v-if="$root.user.addresses.length">
        @lang('My addresses')
    </x-rapidez::button.outline>
</div>