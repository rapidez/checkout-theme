<div class="flex flex-wrap gap-3 mt-5">
    <x-rapidez-ct::button.accent v-on:click.prevent="toggleEdit">
        @lang('Use a new address')
    </x-rapidez-ct::button.accent>
    <x-rapidez-ct::button.outline tag="label" for="popup" class="cursor-pointer" v-if="$root.user.addresses.length">
        @lang('My addresses')
    </x-rapidez-ct::button.outline>
</div>