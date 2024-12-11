<graphql-mutation
    query="mutation email ($email: String!, $password: String!) { updateCustomerEmail ( email: $email, password: $password ) { customer { email } } }"
    :clear="true"
    :callback="refreshUserInfoCallback"
    :variables="{ email: user.email }"
>
    <form class="grid gap-5 grid-cols-2" slot-scope="{ variables, mutate, mutated }" v-on:submit.prevent="mutate">
        <x-rapidez-ct::title.lg class="col-span-2">
            @lang('Change e-mail address')
        </x-rapidez-ct::title.lg>
        <label class="col-span-full sm:col-span-1">
            <x-rapidez::label>@lang('Email')</x-rapidez::label>
            <x-rapidez::input
                name="email"
                v-model="variables.email"
                required
            />
        </label>
        <label class="col-span-full sm:col-span-1">
            <x-rapidez::label>@lang('Password')</x-rapidez::label>
            <x-rapidez::input.password
                name="password"
                v-model="variables.password"
                required
            />
        </label>

        <div class="flex items-center col-span-full">
            <x-rapidez::button.secondary type="submit">
                @lang('Change e-mail address')
            </x-rapidez::button.secondary>

            <div v-if="mutated" class="ml-3 text-green-500">
                @lang('Changed successfully!')
            </div>
        </div>
    </form>
<graphql-mutation>
