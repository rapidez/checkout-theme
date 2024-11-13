<div {{ $attributes->class('text-ct-primary flex flex-wrap gap-8 text-sm max-lg:flex-col') }}>
    <div class="flex-1">
        {{ $slot }}
    </div>
    <x-rapidez-ct::layout.sidebar>
        {{ $sidebar }}
    </x-rapidez-ct::layout.sidebar>
</div>
