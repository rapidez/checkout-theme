<div class="bg-inactive-100 text-ct-inactive relative py-3 text-xs font-semibold">
    <slider reference="header-usp-slider" autoplay loop>
        <div
            ref="header-usp-slider"
            class="scrollbar-hide flex snap-x snap-mandatory items-center gap-7 overflow-x-auto lg:justify-center"
            slot-scope="{ navigate, currentSlide, slidesTotal }"
        >
            @foreach (['Wide range of products', 'Free returns', 'All items shown are in stock', 'Free shipping'] as $usp)
                <div class="flex shrink-0 snap-center items-center justify-center gap-2 max-lg:w-full">
                    <x-heroicon-o-check class="size-4 text-ct-enhanced stroke-2" />
                    <span>{{ $usp }}</span>
                </div>
            @endforeach
        </div>
    </slider>
</div>
