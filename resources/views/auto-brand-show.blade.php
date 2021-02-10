@extends('_layout')

@section('content')
    <div class="main-info">
        {{ $autobrand->brand_name }}
    </div>

    <div class="list-title" style="margin-top: 1em;">
        {{ $autobrand->brand_name }} Models
    </div>
    <div class="list">
    @forelse ($automodels as $automodel_item)
        <x-auto-model-item :auto-model-item="$automodel_item" />
    @empty
        {{ $autobrand->brand_name }} has no models :(
    @endforelse
    </div>
@endsection
