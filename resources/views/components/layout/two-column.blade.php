<div {{ $attributes->class('flex flex-col mx-auto max-w-5xl w-full') }}>
    {{ $slot }}
    <div class="mt-5 grid content-center items-start gap-8 sm:grid-cols-2">
        {{ $columns }}
    </div>
</div>
