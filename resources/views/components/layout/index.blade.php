<div {{ $attributes->class('text-ct-primary flex flex-wrap gap-x-8 mt-20 text-sm max-md:flex-col') }}>
    <div class="flex-1">
        {{ $slot }}
    </div>
    <x-rapidez-ct::layout.sidebar>
        {{ $sidebar }}
    </x-rapidez-ct::layout.sidebar>
</div>
