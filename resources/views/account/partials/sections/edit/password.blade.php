<graphql-mutation
    query="mutation password ($currentPassword: String!, $newPassword: String!) { changeCustomerPassword ( currentPassword: $currentPassword, newPassword: $newPassword ) { email } }"
    :clear="true"
>
    <form class="grid gap-5 grid-cols-2" slot-scope="{ variables, mutate, mutated }" v-on:submit.prevent="mutate">
        <x-rapidez-ct::title.lg class="col-span-2">
            @lang('Change password')
        </x-rapidez-ct::title.lg>
        <label class="col-span-full sm:col-span-1">
            <x-rapidez::label>@lang('Current password')</x-rapidez::label>
            <x-rapidez::input.password
                name="currentPassword"
                v-model="variables.currentPassword"
                required
            />
        </label>
        <label class="col-span-full sm:col-span-1">
            <x-rapidez::label>@lang('New password')</x-rapidez::label>
            <x-rapidez::input.password
                name="newPassword"
                v-model="variables.newPassword"
                required
            />
        </label>

        <div class="flex items-center col-span-full">
            <x-rapidez::button.secondary type="submit">
                @lang('Change password')
            </x-rapidez::button.secondary>

            <div v-if="mutated" class="ml-3 text-green-500">
                @lang('Changed successfully!')
            </div>
        </div>
    </form>
<graphql-mutation>
