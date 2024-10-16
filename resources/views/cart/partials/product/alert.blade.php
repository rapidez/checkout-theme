<div
    class="flex self-start items-center rounded gap-x-1 font-medium text-primary border border-yellow-300 bg-yellow-100 text-xs w-fit max-xl:absolute max-xl:top-2 max-xl:right-0 py-0.5"
    v-if="item.qty_backordered"
>
    <x-heroicon-o-exclamation-circle class="text-yellow-500 mt-px w-5" />
    <div class="flex flex-col">
        <div class="flex items-center gap-2">
            <span>
                <template v-if="item.qty_backordered < item.qty">
                    @lang(':count of the requested quantity will be backordered', ['count' => '@{{ item.qty_backordered }}'])
                </template>
                <template v-else>
                    @lang('This product will be backordered')
                </template>
            </span>
        </div>
    </div>
</div>
