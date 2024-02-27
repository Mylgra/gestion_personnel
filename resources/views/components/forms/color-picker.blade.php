@php
    $name = $getName();
    $type = $getType();
    $width = $getWidth();
@endphp

<div
    class="custom-control"
    x-data="{
        initColorPicker() {
            this.colorPicker = new iro.ColorPicker(this.$refs.input, {
                width: {{ $width }},
                color: '#f00',
            });
            this.colorPicker.on('input:end', (color) => {
                this.$refs.input.value = color.{{$type}}String;
                this.$refs.input.dispatchEvent(new Event('input'));
            });
        }
    }"
    x-init="initColorPicker"
>
    <div
        wire:ignore
        x-ref="input"
        wire:model="{{ $name }}"></div>
</div>


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>
@endpush
