@extends('base')

@section('block-body')

<div class="container">
    <div class="row mt-5">
        <div class="col-sm-8 card p-3">
            <h3 class="card-title">{{ __('Create Post') }}</h3>
            <form method="POST" action="/posts">
                @csrf

                <div class="form-group">
                    <label class="requiredField">
                        {{ __('Post Title') }}
                    </label>
                    <div class="input-container">
                        <input id="title" type="title" class="form-control" value="{{ $post->title }}" name="title" required>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label class="requiredField">
                        {{ __('Post Content') }}
                    </label>
                    <div class="input-container">
                        <textarea id="content" rows="8" type="text" value="{{ $post->content }}" class="form-control" name="content" required></textarea>
                    </div>
                </div>

                <button class="btn btn-success mt-3">{{ __('CREATE') }}</button>
            </form>
        </div>
    </div>
</div>

@endsection
