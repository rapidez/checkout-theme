<x-rapidez-ct::input.checkbox
    name="agreement_ids[]"
    v-bind:value="agreement.agreement_id"
    v-model="checkout.agreement_ids"
    dusk="agreements"
    required
>
    <label class="text-ct-neutral cursor-pointer text-sm underline" v-bind:for="agreement.checkbox_text">
        @{{ agreement.checkbox_text }}
    </label>
</x-rapidez-ct::input.checkbox>