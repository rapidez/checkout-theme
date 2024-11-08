<graphql-mutation
    query="mutation password ($currentPassword: String!, $newPassword: String!) { changeCustomerPassword ( currentPassword: $currentPassword, newPassword: $newPassword ) { email } }"
    :clear="true"
>
    <form class="grid gap-5 grid-cols-2" slot-scope="{ variables, mutate, mutated }" v-on:submit.prevent="mutate">
        <x-rapidez-ct::title.lg class="col-span-2">
            @lang('Change password')
        </x-rapidez-ct::title.lg>
        <x-rapidez-ct::input
            type="password"
            label="Current password"
            name="currentPassword"
            v-model="variables.currentPassword"
            required
        />
        <x-rapidez-ct::input
            type="password"
            label="New password"
            name="newPassword"
            v-model="variables.newPassword"
            required
        />

        <div class="flex items-center col-span-full">
            <x-rapidez-ct::button.accent type="submit">
                @lang('Change password')
            </x-rapidez-ct::button.accent>

            <div v-if="mutated" class="ml-3 text-green-500">
                @lang('Changed successfully!')
            </div>
        </div>
    </form>
<graphql-mutation>
