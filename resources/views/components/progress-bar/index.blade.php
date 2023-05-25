@props(['checkout' => true])
<div
    class="flex items-center space-x-[18px] text-13"
    v-cloak
>
    @if ($checkout)
        <span class="text-ct-inactive whitespace-nowrap font-medium">@lang('Step') @{{ checkout.step }} @lang('out of 4')</span>
    @else
        <span class="text-ct-inactive whitespace-nowrap font-medium">@lang('Step 4 out of 4')</span>
    @endif
    @foreach (['Cart', 'Credentials', 'Payment', 'Confirmation'] as $stepTitle)
        @if ($checkout)
            <div
                class="cursor-pointer"
                v-on:click="goToStep({{ $stepTitle == 'Credentials' ? 2 : $loop->index }})"
                :class="{
                    'w-[12px] h-[12px] bg-ct-accent rounded': {{ $loop->index + 1}} <= checkout.step,
                    'w-[12px] h-[12px] bg-ct-border rounded': {{ $loop->index + 1 }} > checkout.step,
                    'w-[20px] h-[20px] border-4 border-ct-accent-100 rounded-[6px]': {{ $loop->index + 1 }} === checkout.step
                }"
            >
            </div>
        @else
            <div
                class="w-[20px] h-[20px] border-4 border-ct-accent-100 rounded-[6px] cursor-pointer"
                v-on:click="goToStep({{ $stepTitle == 'Credentials' ? 2 : $loop->index }})"
            >
            </div>
        @endif
    @endforeach
</div>
