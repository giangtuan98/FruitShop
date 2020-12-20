

@if ($paginator->hasPages())
  <nav aria-label="shop-navigation">
    <ul class="pagination justify-content-center">
      @if ($paginator->onFirstPage())
        <li class="page-item disabled">
          <a class="page-link" href="#?" aria-label="Previous" aria-disabled="true"
            aria-label="@lang('pagination.previous')">
            <i class="fa fa-angle-left"></i>
          </a>
        </li>
      @else
        <li class="page-item">
          <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" aria-disabled="true"
            aria-label="@lang('pagination.previous')">
            <i class="fa fa-angle-left"></i>
          </a>
        </li>
      @endif

      {{-- Pagination Elements --}}
      @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
          {{-- <li class="page-item disabled" aria-disabled="true"><span
              class="page-link">{{ $element }}</span></li> --}}
          <li class="page-item"><span class="page-link">{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <li class="page-item disabled"><a class="page-link active" href="#?">{{ $page }}</a></li>
            @else
              <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
            @endif
          @endforeach
        @endif
      @endforeach

      @if ($paginator->hasMorePages())
        <li class="page-item">
          <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
            <i class="fa fa-angle-right"></i>
          </a>
        </li>
      @else
        <li class="page-item disabled">
          <a class="page-link" href="#?" aria-label="Next">
            <i class="fa fa-angle-right"></i>
          </a>
        </li>
      @endif
    </ul>
  </nav>
@endif
