<form
    class="relative flex gap-3 flex-wrap items-end w-full z-10"
    v-on:submit.prevent="mutate"
>
    <div class="flex-1">
        <x-rapidez-ct::input
            name="email-newsletter"
            type="email"
            required
            v-model="variables.email"
            :label="__('Email address')"
            :placeholder="__('Enter your email address')"
        />
    </div>
    <x-rapidez-ct::button.accent
        class="relative self-end whitespace-nowrap"
        type="submit"
        v-bind:disabled="mutating && !error"
    >
        <div :class="{ 'opacity-0': (mutated || mutating) && !error }">
            @lang('Subscribe to newsletter')
        </div>
        <div class="absolute inset-0 p-[14px]" v-if="(mutated || mutating) && !error">
            <x-heroicon-o-arrow-path class="mx-auto h-full animate-spin" v-if="mutating" />
            <x-heroicon-o-check class="mx-auto h-full" v-else />
        </div>
    </x-rapidez-ct::button.accent>
</form>