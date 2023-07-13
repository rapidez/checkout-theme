@props(['required' => false])
<div class="text-inactive">
    {{ $slot }}
    @if ($required)
        <span>*</span>
    @endif
</div>
