<x-rapidez-ct::card.white {{ $attributes->only('v-if') }}>
    <x-rapidez-ct::address {{ $attributes }}>
        {{ $slot }}
    </x-rapidez-ct::address>
</x-rapidez-ct::card.white>