@extends('_layout')

@section('content')
    <div class="main-info">
        {{ $automodel->model_name }}
    </div>

    <div class="list-title" style="margin-top: 1em;">
        {{ $automodel->model_name }} Auto Parts
    </div>
    <div class="list">
    @forelse ($autoparts as $autopart_item)
        <x-auto-part-item :auto-part-item="$autopart_item" />
    @empty
        {{ $automodel->model_name }} has no autoparts on selling :(
    @endforelse
    </div>
@endsection
