@extends('_layout')

@section('content')
        <div class="main-info">
            <span class="item-title">
                {{ $autopart_model->part_name }}
            </span>

            <span style="display: block;">
                Price: R$ {{ $autopart_model->price }}
            </span>

            <span>
                For: {{ $autopart_model->model_name }}
            </span>
        </div>

        <aside class="buy-autopart-aside">
            <strong>Buy this autopart!</strong>
            <form action="{{ route('buyAutoPart', ["autopart_id" => $autopart_model->id]) }}" method="POST">
                @csrf
                <input type="email" name="email" id="email" placeholder="email..">
                <textarea name="messages" id="messages" cols="30" rows="5" placeholder="sent your message here"></textarea>
                <button>
                    I Want That!
                </button>
            </form>
        </aside>
@endsection
