@props(['checkout' => true])
<div
    class="text-13 flex items-center space-x-[18px]"
    v-cloak
>
    <span class="text-ct-inactive whitespace-nowrap font-medium">
        @lang('Step :step out of :total', [
            'step' => '@{{ checkout.step }}',
            'total' => count(config('rapidez.checkout_steps.' . config('rapidez.store_code')) ?? config('rapidez.checkout_steps.default')) - 1,
        ])
    </span>
    @foreach (array_slice(config('rapidez.checkout_steps.' . config('rapidez.store_code')) ?? config('rapidez.checkout_steps.default'), 0, -1) as $stepTitle)
        @if ($checkout)
            <div
                class="cursor-pointer"
                v-on:click="goToStep({{ $stepTitle == 'Credentials' ? 2 : $loop->index }})"
                :class="{
                    'w-[12px] h-[12px] bg-ct-accent rounded': {{ $loop->index + 1 }} <= checkout.step,
                    'w-[12px] h-[12px] bg-ct-border rounded': {{ $loop->index + 1 }} > checkout.step,
                    'w-[20px] h-[20px] border-4 border-ct-accent-100 rounded-[6px]': {{ $loop->index + 1 }} === checkout.step
                }"
            >
            </div>
        @else
            <div
                class="border-ct-accent-100 h-[20px] w-[20px] cursor-pointer rounded-[6px] border-4"
                v-on:click="goToStep({{ $stepTitle == 'Credentials' ? 2 : $loop->index }})"
            >
            </div>
        @endif
    @endforeach
</div>
