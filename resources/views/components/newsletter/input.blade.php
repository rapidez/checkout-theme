@props(['id' => uniqId('newsletter-'), 'email' => '\'\''])

<x-rapidez-ct::card.inactive class="relative">
    <x-rapidez-ct::title.lg class="mb-5">
        @lang('Newsletter')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::newsletter-visual />
    <x-rapidez-ct::newsletter.partials.input-mutation :$email :message="__('Thank you for subscribing')">
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
            <x-rapidez-ct::mutation-button-text>
                @lang('Subscribe to newsletter')
            </x-rapidez-ct::mutation-button-text>
        </x-rapidez-ct::button.accent>
    </x-rapidez-ct::newsletter.partials.input-mutation>
</x-rapidez-ct::card.inactive>
