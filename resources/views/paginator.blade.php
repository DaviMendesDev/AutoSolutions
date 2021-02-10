<div class="paginator">
    <div class="page @if(!$paginator->previousPageUrl()) disabled @endif ">
        @if ($paginator->previousPageUrl())
            <a href="{{ $paginator->previousPageUrl() }}">
                <i class="fas fa-angle-left"></i>
            </a>
        @else
            <i class="fas fa-angle-left"></i>
        @endif
    </div>
    <div class="current page">
        {{ $paginator->currentPage() }}
    </div>
    <div class="page @if(!$paginator->nextPageUrl()) disabled @endif">
        @if ($paginator->nextPageUrl())
            <a href="{{ $paginator->nextPageUrl() }}">
                <i class="fas fa-angle-right"></i>
            </a>
        @else
            <i class="fas fa-angle-right"></i>
        @endif
    </div>
</div>
