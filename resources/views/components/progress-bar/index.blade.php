@aware(['checkoutSteps', 'currentStep', 'currentStepKey'])
<div class="flex items-center space-x-3.5 sm:space-x-[18px] text-xs">
    <span class="whitespace-nowrap font-medium text-ct-inactive">
        @lang('Step :step out of :total', [
            'step' => $currentStepKey + 1,
            'total' => count($checkoutSteps),
        ])
    </span>
    @foreach ($checkoutSteps as $checkoutStepKey => $checkoutStep)
        <a href="{{ route('checkout', $checkoutStep) }}" @class([
            'aspect-square w-3 rounded text-center',
            'bg-ct-accent cursor-pointer' => $currentStepKey < $checkoutStepKey,
            'bg-ct-border pointer-events-none' => $checkoutStepKey > $currentStepKey,
            'outline-4 outline outline-ct-accent/20' => $checkoutStepKey === $currentStepKey
        ])>
            {{ $checkoutStepKey + 1 }}
        </a>
    @endforeach
</div>
