@php
    $name = $getName();
    $label = $getLabel();
    $options = $getOptions();
    $native = $getNative();
    $searchable = $getSearchable();
    $multiple = $getMultiple();
    $require = $getRequired();
    $placeholder = $getPlaceholder();
    $autofocus = $getAutofocus();
@endphp
<div class="form-group">
    @if($label)
        <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    @endif
    <div class="form-control-wrap">
        <select
            class="form-select js-select2"
            @if($searchable) data-search="on" @endif
            @if($multiple) multiple="multiple" @endif
            @if($placeholder)data-placeholder="{{ $placeholder }}" @endif
            wire:model="{{ $name }}"
            id="{{ $name }}"
            name="{{ $name }}"
            @if($autofocus) autofocus @endif
            autocomplete="{{ $getAutocomplete() ? 'on' : 'off' }}"
            autocapitalize="{{ $getAutocapitalize() }}"
            @if($getDisabled()) disabled @endif
        >
            <option value="default_option">Default Option</option>
            @foreach($options as $key => $value)
                @if(is_array($value))
                    <optgroup label="{{ $key }}">
                        @foreach($value as $subKey => $subValue)
                            <option value="{{ $subKey }}">{{ $subValue }}</option>
                        @endforeach
                    </optgroup>
                @else
                    <option value="{{ $key }}">{{ $value }}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
