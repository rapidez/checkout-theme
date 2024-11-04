@aware(['checkoutSteps', 'currentStep', 'currentStepKey'])
<div class="flex items-center gap-x-3.5 sm:gap-x-4 text-xs">
    <span class="whitespace-nowrap font-medium text-ct-inactive">
        @lang('Step :step out of :total', [
            'step' => $currentStepKey + 1,
            'total' => count($checkoutSteps),
        ])
    </span>
    @foreach ($checkoutSteps as $checkoutStepKey => $checkoutStep)
        <a href="{{ route('checkout', $checkoutStep) }}"
            @class([
                'size-3 rounded text-center bg-ct-accent',
                'cursor-pointer' => $currentStepKey < $checkoutStepKey,
                'pointer-events-none !bg-ct-border' => $checkoutStepKey > $currentStepKey,
                'outline-4 outline outline-ct-accent/20' => $checkoutStepKey === $currentStepKey
            ])
        ></a>
    @endforeach
</div>
