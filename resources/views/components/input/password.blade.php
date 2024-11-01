<div>
    <toggler>
        <div class="relative" slot-scope="{ isOpen, toggle }">
            <x-rapidez-ct::input
                class="[&>input]:pr-12"
                type="password"
                v-bind:type="isOpen ? 'text' : 'password'"
                {{ $attributes }}
            />
            @if (!$attributes['disabled'] ?? false)
                <div v-on:click="toggle" class="absolute right-5 bottom-4 cursor-pointer">
                    <x-heroicon-o-eye v-if="isOpen" class="h-5" v-cloak/>
                    <x-heroicon-o-eye-slash v-else class="h-5"/>
                </div>
            @endif
        </div>
    </toggler>
</div>
