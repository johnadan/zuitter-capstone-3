<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function getDashboard(){
        //$posts = Post::all();
        $posts = Post::orderBy('created_at', 'content')->get();
        return view('layouts.dashboard', ['posts' => $posts]);
    }

    public function postCreatePost(Request $request){

    	$this->validate($request, [
    		'post' => 'required|max:1000'
    	]);

    	$post = new Post();
    	$post->content = $request['post'];
    	$message = "There was an error!";
    	if ($request->user()->posts()->save($post)) {
    		$message = "Post was successfully created!";
    	}
    	
    	//dd($post);
    	return redirect('/dashboard')->with(['message' => $message]);

    }

    public function getDeletePost($post_id){
    $post = Post::where('id', $post_id)->first();
    //$post = Post::where('id', $post_id)->firstOrFail();
    $post->delete();
    return redirect('/dashboard')->with(['message' => 'Post was successfully deleted']);
    }
}
