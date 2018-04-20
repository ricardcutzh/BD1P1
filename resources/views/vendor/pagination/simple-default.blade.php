
@if ($paginator->hasPages())
  <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="pagination-item disabled"><span>@lang('pagination.previous')</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
        @else
            <li class="pagination-item disabled"><span>@lang('pagination.next')</span></li>
        @endif
    </ul>
  </div>
@endif
