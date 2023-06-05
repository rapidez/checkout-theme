@if (isset($label) && $label)
    <div class="flex">
        <span class="text-inactive">@lang($label)</span>
        @if ($attributes['required'])
            <span>*</span>
        @endif
    </div>
@endif
