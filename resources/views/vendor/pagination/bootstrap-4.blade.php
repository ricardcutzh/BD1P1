@if ($paginator->hasPages())
  <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <!--<li class="pagination-item--wide first"><span class="pagination-link--wide first">&laquo;</span></li>-->
            <li class="pagination-item--wide first"> <a class="pagination-link--wide first" href="#">Previous</a> </li>
        @else
            <!--<li class="pagination-item--wide first"><a class="pagination-link--wide first" href="{{-- $paginator->previousPageUrl() --}}" rel="prev">&laquo;</a></li>-->
            <li class="pagination-item--wide first"> <a class="pagination-link--wide first" href="#">Previous</a> </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="pagination-item first-number"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination-item is-active"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="pagination-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination-item pagination-item--wide last"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="pagination-item disabled"><span class="page-link">&raquo;</span></li>
        @endif
    </ul>
  </div>
@endif
