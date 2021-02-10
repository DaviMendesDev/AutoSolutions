<div class="list-item card">
    <div class="content">
        <span class="item-title"
            aria-label="{{ $autoPartItem->part_name }}"
            title="{{ $autoPartItem->part_name }}">
            {{ $autoPartItem->part_name }}
        </span>
    </div>
    @if ($autoPartItem->poster)
        <img class="item-poster" src="{{ $autoPartItem->poster }}">
    @else
        <div class="no-poster">
            no image <strong>:(</strong>
        </div>
    @endif
    <a href="{{ route('getAutoPart', [ 'autopart_id' => $autoPartItem->id ]) }}"
        title="{{ $autoPartItem->part_name }}"></a>
</div>
