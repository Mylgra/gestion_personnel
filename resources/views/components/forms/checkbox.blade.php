@php
    $name = $getName();
    $label = $getLabel();
    $required = $getRequired();
    $tooltip = $getTooltip();
    $checked = $getChecked();
@endphp
<div class="custom-control custom-checkbox ">
    <input
        type="checkbox"
        class="custom-control-input"
        id="{{ $name }}"
        name="{{ $name }}"
        wire:model="{{ $name }}"
        @if($required) required @endif
        @if($checked) checked @endif
    >
    <label class="custom-control-label custom-label" for="{{ $name }}" title="{{ $tooltip }}">
        {{ $label }}
    </label>
</div>
