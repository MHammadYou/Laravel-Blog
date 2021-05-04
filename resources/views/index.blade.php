@extends('base')

@section('block-head')

@endsection

@section('block-body')
    <div class="container">
        <div class="row mt-3">
            @foreach($posts as $post)
            <div class="col-sm-8 card p-3 mt-3">
                <h4 class="card-title">{{ __($post->title) }}</h4>
                <p>{{ $post->content }}</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection
