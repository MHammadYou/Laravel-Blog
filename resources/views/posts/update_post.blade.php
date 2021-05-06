@extends('base')

@section('block-body')

    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 card p-3">
                <h3 class="card-title">{{ __('Update Post') }}</h3>
                <form method="POST" action="/posts/{{ $post->id }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label class="requiredField">
                            {{ __('Post Title') }}
                        </label>
                        <div class="input-container">
                            <input id="title" type="title" value="{{ $post->title }}" class="form-control" name="title" required>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label class="requiredField">
                            {{ __('Post Content') }}
                        </label>
                        <div class="input-container">
                            <textarea id="content" rows="8" type="text" class="form-control" name="content" required>{{ $post->content }}</textarea>
                        </div>
                    </div>

                    <button class="btn btn-success mt-3">{{ __('UPDATE') }}</button>
                </form>
            </div>
        </div>
    </div>

@endsection
