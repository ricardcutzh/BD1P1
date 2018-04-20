@if ($paginator->hasPages())
  <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <!--<li class="pagination-item disabled"><span>&laquo;</span></li>-->
            <li class="pagination-item--wide first"><a class="pagination-link--wide first" href="#">Previous</a> </li>
        @else
          <!-- <li><a href="{{-- $paginator->previousPageUrl() --}}" rel="prev">&laquo;</a></li>-->
          <li class="pagination-item--wide first"> <a class="pagination-link--wide first" href="{{ $paginator->previousPageUrl() }}">Previous</a> </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="pagination-item disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <!--<li class="pagination-item active"><span>{{-- $page --}}</span></li>-->
                        <li class="pagination-item is-active"> <a class="pagination-link" href="#">{{ $page }}</a> </li>
                    @else
                        <!--<li><a href="{{-- $url --}}">{{-- $page --}}</a></li>-->
                        <li class="pagination-item"> <a class="pagination-link" href="{{ $url }}">{{ $page }}</a> </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <!--<li><a href="{{-- $paginator->nextPageUrl() --}}" rel="next">&raquo;</a></li>-->
            <li class="pagination-item--wide last"> <a class="pagination-link--wide last" href="{{ $paginator->nextPageUrl() }}">Next</a> </li>
        @else
            <!--<li class="disabled"><span>&raquo;</span></li>-->
            <li class="pagination-item--wide last"> <a class="pagination-link--wide last" href="#">Next</a> </li>
        @endif
    </ul>
  </div>
@endif
