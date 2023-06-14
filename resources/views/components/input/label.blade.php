<div class="flex text-inactive">
    {{ $slot }}
    @if ($required ?? false)
        <span>*</span>
    @endif
</div>
