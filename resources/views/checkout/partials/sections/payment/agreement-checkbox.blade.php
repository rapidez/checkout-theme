<div>
    <x-rapidez::input.checkbox.base
        name="agreement_ids[]"
        v-bind:value="agreement.agreement_id"
        dusk="agreements"
        required
    />
    <label class="text-ct-primary cursor-pointer text-sm underline" v-bind:for="agreement.checkbox_text">
        @{{ agreement.checkbox_text }}
    </label>
</div>