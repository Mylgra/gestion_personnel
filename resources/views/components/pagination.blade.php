<!-- resources/views/vendor/pagination/custom.blade.php -->

@if ($paginator->hasPages())
    <ul class="pagination justify-content-center justify-content-md-start">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                    <em class="icon ni ni-chevrons-left"></em>
                </a>
            </li>
        @endif

        @foreach($elements as $element)
            @if(is_string($element))
                <li class="page-item"><span class="page-link">{{ $element }}</span></li>
            @endif

            @if(is_array($element))
                @foreach($element as $page => $url)
                    @if($page == $paginator->currentPage())
                        <li class="page-item"><span class="page-item">{{ $page }}</span></li>
                    @else
                        <li><a href=""></a></li>
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                    <em class="icon ni ni-chevrons-right"></em>
                </a>
            </li>
        @else
            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
        @endif
    </ul>
@endif
