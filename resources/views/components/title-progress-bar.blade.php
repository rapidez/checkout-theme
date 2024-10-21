@aware(['checkoutSteps', 'currentStep', 'currentStepKey'])
<div class="flex flex-wrap gap-1 items-baseline justify-between">
    <x-rapidez-ct::title {{ $attributes->except(['checkoutSteps', 'currentStep', 'currentStepKey']) }}>
        {{ $slot }}
    </x-rapidez-ct::title>
    <x-rapidez-ct::progress-bar />
</div>
