<div class="mt-5">
    <x-rapidez-ct::button.primary v-on:click.prevent="toggleEdit">
        @lang('Use a new address')
    </x-rapidez-ct::button.primary>
    <x-rapidez-ct::button.outline tag="label" for="popup" class="cursor-pointer" v-if="$root.user.addresses.length">
        @lang('My addresses')
    </x-rapidez-ct::button.outline>
</div>