@slots(['sidebar'])

<div {{ $attributes->class('text flex flex-wrap gap-8 text-sm max-lg:flex-col') }}>
    <div class="flex-1 min-w-0 max-w-full">
        {{ $slot }}
    </div>
    <x-rapidez-ct::layout.sidebar :attributes="$sidebar->attributes">
        {{ $sidebar }}
    </x-rapidez-ct::layout.sidebar>
</div>
