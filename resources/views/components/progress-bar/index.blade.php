@aware(['checkoutSteps', 'currentStep', 'currentStepKey'])
<div class="flex items-center gap-x-3.5 sm:gap-x-4 text-xs">
    <span class="whitespace-nowrap font-medium text-muted">
        @lang('Step :step out of :total', [
            'step' => $currentStepKey + 1,
            'total' => count($checkoutSteps),
        ])
    </span>
    @foreach ($checkoutSteps as $checkoutStepKey => $checkoutStep)
        <a href="{{ route('checkout', $checkoutStep) }}"
            @class([
                'size-3 rounded text-center bg-primary',
                'cursor-pointer' => $currentStepKey < $checkoutStepKey,
                'pointer-events-none !bg-emphasis' => $checkoutStepKey > $currentStepKey,
                'outline-4 outline outline-primary/20' => $checkoutStepKey === $currentStepKey
            ])
        ></a>
    @endforeach
</div>
