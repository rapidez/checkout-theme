<toggler>
    <div
        class="relative"
        slot-scope="{ isOpen, toggle }"
    >
        <x-rapidez-ct::input
            class="[&>input]:pr-12"
            type="password"
            v-bind:type="isOpen ? 'text' : 'password'"
            label="password"
            {{ $attributes }}
        />
        @if (!$attributes['disabled'] ?? false)
            <div
                class="absolute right-5 bottom-4 cursor-pointer"
                v-on:click="toggle"
            >
                <x-heroicon-o-eye
                    class="h-5"
                    v-if="isOpen"
                />
                <x-heroicon-o-eye-off
                    class="h-5"
                    v-else
                />
            </div>
        @endif
    </div>
</toggler>
