@if ($paginator->hasPages())
<nav class="pagination">
    <div class="column">
    <ul class="pages">
            {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>
    </div>
     {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <div class="column text-right hidden-xs-down"><a class="btn btn-outline-primary btn-sm" href="{{ $paginator->nextPageUrl() }}">Next&nbsp;<i class="icon-arrow-right"></i></a></div>
        @else
            <div class="column text-right hidden-xs-down"><buttom class="btn btn-outline-secondary disabled" href="">Next&nbsp;<i class="icon-arrow-right"></i></button></div>
        @endif
    
</nav>
@endif

