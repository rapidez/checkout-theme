@if ($globals->brand->logo ?? false)
    @responsive($globals->brand->logo, ['class' => $attributes['class']])
@endif
