<template v-if="false"></template>
@stack('payment_methods')
<template v-else>
    <x-rapidez-ct::input.radio
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
                class="absolute right-5 size-8"
                v-bind:src="`/payment-icons/${method.code}.svg`"
                onerror="this.onerror=null; this.src=`/payment-icons/default.svg`"
            >
        </div>
    </x-rapidez-ct::input.radio>
</template>