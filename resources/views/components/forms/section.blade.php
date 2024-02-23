@php
    $schemas = $getSchema();
    $title = $getTitle();
    $description = $getDescription();
    $columns = $getColumn();
    $class = $columns == 2 ? 'col-lg-6 col-md-6 col-sm-12' : ($columns == 3 ? 'col-lg-4 col-md-4 col-sm-12' : 'col-12');
@endphp

<div>
    <div class="card">
        <div class="card-header card-stretch">
            <h5 class="card-title">{{ $title }}</h5>
        </div>
        <div class="card-inner">
            <p class="card-description">{{ $description }}</p>
            <div class="row g-4">
                @foreach($schemas as $index => $schema)
                    <div class="{{ $class }}">
                        {{ $schema }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
