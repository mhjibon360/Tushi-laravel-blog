@if ($paginator->hasPages())
    <ul class="pagination justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link page-link-previous bg-transparent rounded-0 px-0 border-0 text-dark text-link active text-uppercase fw-medium" href="#" aria-label="Previous">
                    <i class="ti ti-chevron-left"></i>
                    <span>Previous</span>
                </a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link page-link-previous bg-transparent rounded-0 px-0 border-0 text-dark text-link active text-uppercase fw-medium" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous">
                    <i class="ti ti-chevron-left"></i>
                    <span>Previous</span>
                </a>
            </li>
        @endif

        {{-- Page Count --}}
        <li class="page-item page-count" title="Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}">
            <span class="current-page">{{ $paginator->currentPage() }}</span>
            <span class="total-page">{{ $paginator->lastPage() }}</span>
        </li>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link bg-transparent rounded-0 px-0 border-0 text-dark text-link active text-uppercase fw-medium" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next">
                    <span>Next</span>
                    <i class="ti ti-chevron-right"></i>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link bg-transparent rounded-0 px-0 border-0 text-dark text-link active text-uppercase fw-medium" href="#" aria-label="Next">
                    <span>Next</span>
                    <i class="ti ti-chevron-right"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
