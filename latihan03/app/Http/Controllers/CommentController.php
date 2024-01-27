<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required',
        ]);

        Comment::create([
            'post_id' => $post->id,
            'user_id' => auth()->id(),
            'body' => $request->body,
        ]);

        return back()->with('success', 'Komen berhasil di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug, Comment $comment)
    {
        $post = $comment->post;
        return view('comment.edit', compact('comment', 'post'), [
            'title' => 'Edit Comment',
            'active' => 'posts',
            'slug' => $slug
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug, Comment $comment, Post $post)
    {
        $request->validate([
            'body' => 'required|string'
        ]);

        $comment->update([
            'body' => $request->input('body')
        ]);

        return redirect()->route('post', $slug)->with('success', 'Komentar berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'Komentar berhasil di hapus!');
    }
}
