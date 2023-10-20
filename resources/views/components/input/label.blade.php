@props(['required' => false])
<div class="text-ct-inactive">
    {{ $slot }}
    @if ($required)
        <span>*</span>
    @endif
</div>
