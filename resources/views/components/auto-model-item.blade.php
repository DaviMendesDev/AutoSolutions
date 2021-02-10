<div class="list-item card">
    <div class="content">
        <span class="item-title"
            aria-label="{{ $autoModelItem->model_name }}"
            title="{{ $autoModelItem->model_name }}">
            {{ $autoModelItem->model_name }}
        </span>
    </div>
    @if ($autoModelItem->poster)
        <img class="item-poster" src="{{ $autoModelItem->poster }}">
    @else
        <div class="no-poster">
            no image <strong>:(</strong>
        </div>
    @endif
    <a href="{{ route('getAutoModel', [ 'automodel_id' => $autoModelItem->id ]) }}"
        title="{{ $autoModelItem->model_name }}"></a>
</div>
