@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <h1 class="mb-3">Comment</h1>

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <form action="{{ route('comments.update', ['comment' => $comment, 'post' => $post, 'slug' => $slug]) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="body" class="form-label">Edit Comment</label>
                        <textarea class="form-control" name="body" id="body" rows="3">{{ $comment->body }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
