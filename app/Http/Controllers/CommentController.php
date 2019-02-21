<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    //
     public function __construct() {
        $this->middleware('auth');
    }
 
    public function store(CommentRequest $request)
    {
        $post = Post::findOrFail($request->post_id);
 
        Comment::create([
            'content' => $request->content,
            'user_id' => Auth::id(),
            'post_id' => $post->id
        ]);
        //return redirect('/dashboard');
        return redirect()->route('posts.show', $post->id);
    }
}
