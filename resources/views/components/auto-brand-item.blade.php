<div class="list-item card">
    <div class="content">
        <span class="item-title"
            aria-label="{{ $autoBrandItem->brand_name }}"
            title="{{ $autoBrandItem->brand_name }}">
            {{ $autoBrandItem->brand_name }}
        </span>
    </div>
    @if ($autoBrandItem->poster)
        <img class="item-poster" src="{{ $autoBrandItem->poster }}">
    @else
        <div class="no-poster">
            no image <strong>:(</strong>
        </div>
    @endif
    <a href="{{ route('getAutoBrand', [ 'autobrand_id' => $autoBrandItem->id ]) }}"
        title="{{ $autoBrandItem->brand_name }}"></a>
</div>
