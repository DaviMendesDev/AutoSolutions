@extends('_layout')

@section('content')
    <div class="list">
        @forelse ($auto_parts as $auto_part_item)
            <x-auto-part-item :auto-part-item="$auto_part_item"/>
        @empty
            <p class="text-muted">
                no data find..
            </p>
        @endforelse

        {{ $auto_parts->links() }}
    </div>
@endsection
