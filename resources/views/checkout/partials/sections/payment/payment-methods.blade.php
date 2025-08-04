<template v-if="false"></template>
@stack('payment_methods')
<template v-else>
    <x-rapidez-ct::input.radio.tile
        name="payment_method"
        v-model="variables.code"
        v-bind:value="method.code"
        v-bind:dusk="'payment-method-'+index"
        v-on:change="mutate"
        required
    >
        <div class="flex items-center">
            <span>@{{ method.title }}</span>
            <img
                class="absolute right-5 h-8 w-9"
                v-bind:src="`/payment-icons/${method.code}.svg`"
                onerror="this.onerror=null; this.src=`/payment-icons/default.svg`"
                v-bind:alt="method.title"
            >
        </div>
    </x-rapidez-ct::input.radio.tile>
</template>
