<div {{ $attributes->class('text-primary flex flex-wrap gap-x-8 text-sm max-md:flex-col') }}>
    <div {{ $main->attributes->class('flex-1') }}>
        {{ $main }}
    </div>
    <x-rapidez-ct::sidebar>
        {{ $sidebar }}
    </x-rapidez-ct::sidebar>
</div>
