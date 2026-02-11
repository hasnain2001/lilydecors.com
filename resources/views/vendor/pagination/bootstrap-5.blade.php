@if ($paginator->hasPages())
    <nav class="pagination-custom d-flex justify-content-between align-items-center">
        {{-- Mobile Pagination --}}
        <div class="pagination-mobile d-flex justify-content-between flex-fill d-lg-none">
            <div class="pagination-info-mobile">
                <span class="pagination-meta">
                    <span class="pagination-current">{{ $paginator->firstItem() }}</span>
                    - 
                    <span class="pagination-current">{{ $paginator->lastItem() }}</span>
                    of
                    <span class="pagination-total">{{ $paginator->total() }}</span>
                </span>
            </div>
            <ul class="pagination-list-mobile">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="pagination-item-mobile disabled" aria-disabled="true">
                        <span class="pagination-link-mobile pagination-prev">
                            <i class="fas fa-chevron-left"></i>
                            <span class="pagination-text">Previous</span>
                        </span>
                    </li>
                @else
                    <li class="pagination-item-mobile">
                        <a class="pagination-link-mobile pagination-prev" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                            <i class="fas fa-chevron-left"></i>
                            <span class="pagination-text">Previous</span>
                        </a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="pagination-item-mobile">
                        <a class="pagination-link-mobile pagination-next" href="{{ $paginator->nextPageUrl() }}" rel="next">
                            <span class="pagination-text">Next</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                @else
                    <li class="pagination-item-mobile disabled" aria-disabled="true">
                        <span class="pagination-link-mobile pagination-next">
                            <span class="pagination-text">Next</span>
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </li>
                @endif
            </ul>
        </div>

        {{-- Desktop Pagination --}}
        <div class="pagination-desktop d-none d-lg-flex align-items-center justify-content-between w-100">
            {{-- Page Info --}}
            <div class="pagination-info">
                <div class="pagination-meta">
                    <span class="pagination-meta-item">
                        <i class="fas fa-list-ol"></i>
                        <span>Showing</span>
                        <span class="pagination-current">{{ $paginator->firstItem() }}</span>
                        <span>to</span>
                        <span class="pagination-current">{{ $paginator->lastItem() }}</span>
                        <span>of</span>
                        <span class="pagination-total">{{ $paginator->total() }}</span>
                        <span>results</span>
                    </span>
                </div>
            </div>

            {{-- Pagination Controls --}}
            <div class="pagination-controls">
                <ul class="pagination-list">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="pagination-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="pagination-link pagination-nav pagination-prev" aria-hidden="true">
                                <i class="fas fa-chevron-left"></i>
                                <span class="pagination-nav-text">Previous</span>
                            </span>
                        </li>
                    @else
                        <li class="pagination-item">
                            <a class="pagination-link pagination-nav pagination-prev" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                                <i class="fas fa-chevron-left"></i>
                                <span class="pagination-nav-text">Previous</span>
                            </a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="pagination-item disabled" aria-disabled="true">
                                <span class="pagination-link pagination-ellipsis">
                                    <i class="fas fa-ellipsis-h"></i>
                                </span>
                            </li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="pagination-item active" aria-current="page">
                                        <span class="pagination-link pagination-number">
                                            {{ $page }}
                                        </span>
                                    </li>
                                @else
                                    <li class="pagination-item">
                                        <a class="pagination-link pagination-number" href="{{ $url }}">
                                            {{ $page }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="pagination-item">
                            <a class="pagination-link pagination-nav pagination-next" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                                <span class="pagination-nav-text">Next</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    @else
                        <li class="pagination-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="pagination-link pagination-nav pagination-next" aria-hidden="true">
                                <span class="pagination-nav-text">Next</span>
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif