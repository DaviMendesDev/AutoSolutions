@extends('_layout')

@section('content')
    <div class="list-title">Auto Parts</div>
    <div class="list">
        @forelse ($autoparts as $autopart_item)
            <x-auto-part-item :auto-part-item="$autopart_item"/>
        @empty
            <p class="text-muted">
                no data find..
            </p>
        @endforelse
    </div>

    <div class="list-title">Models</div>
    <div class="list">
        @forelse ($models as $model_item)
            <x-auto-model-item :auto-model-item="$model_item"/>
        @empty
            <p class="text-muted">
                no data find..
            </p>
        @endforelse
    </div>

    <div class="list-title">Brands</div>
    <div class="list">
        @forelse ($brands as $brand_item)
            <x-auto-brand-item :auto-brand-item="$brand_item"/>
        @empty
            <p class="text-muted">
                no data find..
            </p>
        @endforelse
    </div>
@endsection
