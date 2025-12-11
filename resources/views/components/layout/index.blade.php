<div {{ $attributes->class('text flex gap-8 text-sm max-lg:flex-col') }}>
    <div class="flex-1 max-w-full overflow-hidden">
        {{ $slot }}
    </div>
    <x-rapidez-ct::layout.sidebar :attributes="$sidebar->attributes">
        {{ $sidebar }}
    </x-rapidez-ct::layout.sidebar>
</div>
