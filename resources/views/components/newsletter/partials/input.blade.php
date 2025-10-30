<form v-on:submit.prevent="mutate" class="relative flex gap-3 flex-wrap items-end w-full z-10">
    <div class="sm:flex-1 max-sm:w-full">
        <label>
            <x-rapidez::label>@lang('Email')</x-rapidez::label>
            <x-rapidez::input
                name="email"
                type="email"
                required
                v-model="variables.email"
                :placeholder="__('Enter your email address')"
            />
        </label>
    </div>
    <x-rapidez::button.secondary
        class="relative self-end whitespace-nowrap"
        type="submit"
        v-bind:disabled="mutating && !error"
    >
        <div :class="{ 'opacity-0': (mutated || mutating) && !error }">
            @lang('Subscribe to newsletter')
        </div>
        <div class="absolute inset-0 p-3.5" v-if="(mutated || mutating) && !error">
            <x-heroicon-o-arrow-path class="mx-auto h-full animate-spin" v-if="mutating" />
            <x-heroicon-o-check class="mx-auto h-full" v-else stroke-width="2.5" />
        </div>
    </x-rapidez::button.secondary>
</form>
