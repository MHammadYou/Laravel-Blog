@extends('base')

@section('block-head')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endsection

@section('block-body')
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-8 card p-3 mt-3">
                <h4 class="card-title">{{ __($post->title) }}</h4>
                <p>{{ $post->content }}</p>
                <div class="mt-2">
                    <div class="author-name">{{ __(ucwords($user->name)) }}</div>
                    <small class="text-muted">{{ __($user->email) }}</small>
                </div>
            </div>
        </div>
    </div>
@endsection
