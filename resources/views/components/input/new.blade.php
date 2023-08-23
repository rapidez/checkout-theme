@props(['name', 'label', 'type' => 'text', 'disabled' => false, 'required' => false, 'placeholder' => false, 'disabledIcon' => true])

<label {{ $attributes->merge([
    'class' => 'group flex flex-col gap-y-2 text-sm',
]) }}>
    @isset($label)
        <span {{ ($label->attributes ?? $attributes->only([]))->merge(['class' => 'text-ct-inactive text-sm']) }}>
            {{ $label }}
            @if($required || ($input->attributes ?? false) && $input->attributes->has('required'))
                <span>*</span>
            @elseif(($input->attributes ?? false) && $input->attributes->has('v-bind:required'))
                <span v-if="{{ $input->attributes->get('v-bind:required') }}">*</span>
            @endif
        </span>
    @endisset

    <span class="flex gap-y-2 flex-col relative">
        <input
            {{ ($input->attributes ?? $attributes->only([]))->merge([
                'id' => $name ?? $input->attributes['name'],
                'name' => $name ?? $input->attributes['name'],
                'type' => $type,
                'placeholder' => $placeholder,
                'dusk' => $attributes->get('v-bind:dusk') ? null : $name ?? $input->attributes['name'],
                'class' => 'peer rounded border border-border bg-white py-4 px-5 text-sm outline-none !ring-0 transition-all placeholder:text-ct-inactive focus:border-ct-primary disabled:bg-ct-inactive-200 disabled:text-ct-inactive font-medium disabled:pr-12',
            ]) }}
            @disabled($disabled)
            @required($required)
        >
        {{ $slot }}
        @if($disabledIcon)
            <x-heroicon-o-lock-closed class="disabled hidden w-5 peer-disabled:block absolute right-5 top-5" />
        @endif
    </span>
</label>
