<div class="bg text-muted relative py-3 text-xs font-semibold">
    <slider reference="header-usp-slider" autoplay v-slot="{ navigate, currentSlide, slidesTotal }">
        <ul
            ref="header-usp-slider"
            class="scrollbar-hide flex snap-x snap-mandatory items-center gap-7 overflow-x-auto lg:justify-center"
            tabindex="0"
            aria-label="USP features"
        >
            @foreach (['Wide range of products', 'Free returns', 'All items shown are in stock', 'Free shipping'] as $usp)
                <li class="flex shrink-0 snap-center items-center justify-center gap-2 max-lg:w-full">
                    <x-heroicon-o-check class="size-4 text-primary stroke-2" />
                    <span>{{ $usp }}</span>
                </li>
            @endforeach
        </ul>
    </slider>
</div>
