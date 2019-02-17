<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Auth;
//use App\User;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function getDashboard(){
        //$posts = Post::all();
        $posts = Post::orderBy('created_at', 'content')->get();
        return view('layouts.dashboard', compact('posts'));
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
    //$post = Post::find($post_id);
    //$post = Post::where('id', $post_id)->firstOrFail();
    //if(Auth::user()->id != $post->user_id){
        //return redirect()->back();
    //}
    $post->delete();
    return redirect('/dashboard')->with(['message' => 'Post was successfully deleted']);
    }

    public function postEditPost(Request $request){
        $this->validate($request, [
            'postbody' => 'required'
        ]);
        //$post = Post::find($request ['postId']); 
        $post = Post::find($request ['postId'])->where('user_id', Auth::user()->id)->get();
        //$post = Post::find($request->user()->posts());
        $post->postbody = $request['postbody'];
        $post->update();
        return response()->json(['message' => 'Post was successfully edited!'], 200);
        //
        //$data = Data::find ( $req->id );
        //$data->name = $req->name;
        //$data->save ();
        //return response ()->json ( $data );
    }
}
