@props(['checkout' => true])
<div v-cloak class="flex items-center space-x-[18px] mb-[5px] sm:mb-0 text-sm">
    @if($checkout)
        <span class="antialiased font-medium whitespace-nowrap text-inactive">Stap @{{ checkout.step }} van de 4</span>
    @else
        <span class="antialiased font-medium whitespace-nowrap text-inactive">Stap 4 van de 4</span>
    @endif
    @foreach(['Cart', 'Credentials', 'Payment', 'Confirmation'] as $stepTitle)
        @if($checkout)
            <div
                v-on:click="goToStep({{ $stepTitle == 'Credentials' ? 3 : $loop->index }})"
                class="hover:cursor-pointer"
                :class="{'w-[12px] h-[12px] bg-accent': {{ $loop->index + 1 }} <= checkout.step, 'w-[12px] h-[12px] bg-border': {{ $loop->index + 1 }} > checkout.step, 'w-[20px] h-[20px] border-[4px] border-blue-110': {{ $loop->index + 1 }} === checkout.step}">
            </div>
        @else
        <div
            v-on:click="goToStep({{ $stepTitle == 'Credentials' ? 3 : $loop->index }})"
            class="w-[12px] h-[12px] bg-blue w-[20px] h-[20px] border-[4px] border-blue-110 hover:cursor-pointer"
            >
            </div>
        @endif
    @endforeach
</div>
