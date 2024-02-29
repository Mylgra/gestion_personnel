@php
    $name = $getName();
    $label = $getLabel();
    $required = $getRequired();
    $uniqueId = $getUniqueId();
    $placeholder = $getPlaceholder();
@endphp
<div
    class="form-group"
    x-data="{
        initEasy() {
            this.editor = new EasyMDE({
                element: this.$refs.editor,
                minHeight: '500px',
                placeholder: '{{ $placeholder }}',
                autosave: {
                    enabled: true,
                    uniqueId: '{{$name}}-{{ $uniqueId }}',
                    delay: 1000,
                    submit_delay: 5000,
                    timeFormat: {
                        locale: 'en-US',
                        format: {
                            year: 'numeric',
                            month: 'long',
                            day: '2-digit',
                            hour: '2-digit',
                            minute: '2-digit',
                        },
                    },
                    text: 'Autosaved: ',
                    previewRender: function(plainText) {
                        console.log(plainText)
                        return customMarkdownParser(plainText);
                    },
                    previewRender: function(plainText, preview) {
                        console.log(plainText,preview)
                        setTimeout(function(){
                            preview.innerHTML = customMarkdownParser(plainText);
                        }, 250);
                        return 'Loading...';
                    },
                },
            });
            @this.set('{{ $name }}', easyMDE.value());
        }
    }"
    x-init="initEasy"
>
    @if($label)
        <label class="form-label" for="{{ $uniqueId }}">{{ $label }}</label>
    @endif
    <div class="form-control-wrap">
        <textarea
            x-ref="editor"
            id="{{ $uniqueId }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            wire:model="{{$name}}"
        ></textarea>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
@endpush
