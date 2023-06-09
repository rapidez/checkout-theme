<div {{ $attributes->class('flex flex-col mx-auto max-w-4xl w-full') }}>
    {{ $slot }}
    <div class="grid sm:grid-cols-2 gap-8 mt-5 items-start content-center">
        {{ $columns }}
    </div>
</div>
