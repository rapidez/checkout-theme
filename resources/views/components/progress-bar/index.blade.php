@php($steps = config('rapidez.frontend.checkout_steps.' . config('rapidez.store_code'), config('rapidez.checkout_steps.' . config('rapidez.store_code'), config('rapidez.frontend.checkout_steps.default'), config('rapidez.checkout_steps.default'))))
<div class="flex items-center space-x-3.5 sm:space-x-[18px] text-xs" v-cloak>
    <span class="whitespace-nowrap font-medium text-ct-inactive">
        @lang('Step :step out of :total', [
            'step' => '@{{ checkout.step }}',
            'total' => count($steps) - 1,
        ])
    </span>
    @foreach (array_slice($steps, 0, -1) as $stepTitle)
        <div
            class="aspect-square w-3 rounded"
            v-on:click="goToStep({{ $stepTitle == 'Credentials' ? 3 : $loop->index }})"
            :class="{
                'bg-ct-accent cursor-pointer': {{ $loop->index + 1 }} <= checkout.step,
                'bg-ct-border pointer-events-none': {{ $loop->index + 1 }} > checkout.step,
                'outline-4 outline outline-ct-accent/20': {{ $loop->index + 1 }} === checkout.step
            }"
        ></div>
    @endforeach
</div>
