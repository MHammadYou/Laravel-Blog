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
                <div class="">
                    <div class="author-name">{{ __(ucwords($post->user->name)) }}</div>
                    <small class="text-muted">{{ __($post->user->email) }}</small>
                    <span style="float:right;">
                        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user->id)
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                            <form action="/posts/{{$post->id}}" method="post" style="display: inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        @endif
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
