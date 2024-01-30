<div class="text-right text-sm font-medium">
    <div v-if="method.amount > 0" class="text-ct-inactive">@{{ method.amount | price }}</div>
    <div v-else class="text-ct-enhanced">
        @lang('Free')
    </div>
</div>