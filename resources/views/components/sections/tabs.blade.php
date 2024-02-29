@php
    $schemas = $getSchemas();
@endphp
<div class="card card-bordered card-preview">
    <div class="card-inner">
        <ul class="nav nav-tabs mt-n3">
            @foreach($schemas as $index  => $schema)
                <li class="nav-item">
                    <a class="nav-link {{ $index === 0 ? 'active' : '' }}" data-bs-toggle="tab"
                       href="#tab-{{ $index }}">
                        @if($schema->getPosition() === 'left' || $schema->getPosition() === null)
                            <em class="icon ni ni-{{ $schema->getIcon() }}"></em>
                            <span>{{ $schema->getName() }}</span>
                        @else
                            <span>{{ $schema->getName() }}</span>
                            <em class="icon ni ni-{{ $schema->getIcon() }}"></em>
                        @endif
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="tab-content">
            @foreach($schemas as $index => $schema)
                <div class="tab-pane {{ $index === 0 ? 'active' : '' }}" id="tab-{{ $index }}">
                    {{ $schema }}
                </div>
            @endforeach
        </div>
    </div>
</div>
