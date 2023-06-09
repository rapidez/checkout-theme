<ul {{ $attributes->class('flex flex-col text-sm mt-1 [&>*+*]:border-t [&>*]:py-4 [&>*:first-child]:pt-0 [&>*:last-child]:pb-0 [&>*]:flex [&>*]:flex-wrap [&>*]:justify-between') }}>
    {{ $slot }}
</ul>
