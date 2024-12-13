@aware(['checkoutSteps', 'currentStep', 'currentStepKey'])
@php($isAnchor = $attributes->filter(null)->hasAny('href', ':href', 'v-bind:href'))
<div class="flex flex-wrap items-end justify-between gap-1">
    <div class="flex gap-5 max-lg:flex-col lg:-translate-x-10">
        <div class="flex items-center gap-5 lg:items-center">
            @if ($isAnchor)
                <a href="{{ $attributes->get('href', ':href', 'v-bind:href') }}" class="max-lg:size-14 max-lg:flex max-lg:items-center max-lg:justify-center max-lg:rounded-full max-lg:border">
                    <x-heroicon-o-arrow-left class="size-5" />
                </a>
            @endif
            <a href="{{ url('/') }}" class="*:h-auto *:max-h-16 *:w-full *:object-contain lg:hidden">
                <x-rapidez-ct::logo />
            </a>
        </div>
        <x-rapidez-ct::title {{ $attributes->except(['checkoutSteps', 'currentStep', 'currentStepKey']) }}>
            {{ $slot }}
        </x-rapidez-ct::title>
    </div>
    <x-rapidez-ct::progress-bar />
</div>
