@extends('layouts.main')

@section('container')


<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
                    <div style="max-height: 200px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1000x200?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block mt-3">Back to post..</a>
            </div>

            <div class="mt-4 col-md-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Comments</h4>
                    </div>
                    <div class="card-body">
                        @auth
                            <form action="{{ route('comments.store', $post) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="body" class="form-label">Add Comment</label>
                                    <textarea class="form-control" name="body" id="body" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        @else
                            <p><a href="{{ route('login') }}">Login</a> to add comments.</p>
                        @endauth
                    </div>
                </div>

                @if ($comments)
                    <div class="container">
                        <div class="row">
                            @foreach ($comments as $comment)
                                <div class="col-md-1 mb-2">
                                    <img class="rounded-circle" src="https://source.unsplash.com/60x60?profile" alt="">
                                </div>
                                <div class="col-md-11">
                                    <strong class="h5">{{ $comment->user->name }}</strong>
                                    <p>{{ $comment->body }}</p>
                                </div>
                                <div class="mb-3">
                                    @if (auth()->check() && auth()->user()->id === $comment->user_id)
                                        <a href="{{ route('comments.edit', ['slug' => $slug, 'comment' => $comment->id]) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger border-0">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <p>No comments yet.</p>
                @endif
            </div>
        </div>
    </div>

@endsection
