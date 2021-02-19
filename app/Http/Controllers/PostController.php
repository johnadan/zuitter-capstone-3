<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Auth;
//use App\User;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getDashboard(){
        //$posts = Post::all();
        $posts = Post::orderBy('created_at', 'DESC')->get();
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
    	return redirect('/dashboard')->with(['message' => $message]);
        //dd($post);
    }

    public function getDeletePost($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('/dashboard')->with(['message' => 'Post was successfully deleted']);    
        //$post = Post::where('id', $post_id)->first();
        //dd($post);
        //dd($id);
        //$post = Post::find($id)->firstOrFail();
        //$post = Post::find($id);
        //$post = Post::find($post_id);
        //$post = Post::where('id', $post_id)->firstOrFail();
        //if(Auth::user()->id != $post->user_id){
            //return redirect()->back();
        //}
        //$message = "There was an error!";
    }

    public function postEditPost(Request $request, $id){
        $this->validate($request, [
    		'editedpost' => 'required|max:1000'
    	]);
        $post = Post::find($id);
        $post->content = $request->editedpost;
        $post->save();
        return redirect("/dashboard")->with(['message' => 'Post was successfully edited!']);
        // $this->validate($request, [
        //     'content' => 'required'
        // ]);
        //$post = Post::find($request ['postId']); 
        //$post = Post::find($request ['postId'])->where('user_id', Auth::user()->id)->get();
        //dd($post);
        //$post = Post::find($request->user()->posts());
        //$post->update();
        //dd($post);
        // return response()->json(['message' => 'Post was successfully edited!'], 200);
        //$data = Data::find ($req->id);
        //$data->name = $req->name;
        //$data->save ();
        //return response ()->json ($data);
    }

    // public function updateTask(Request $request, $id){
    //     $taskUpdate = Task::find($id);
    //     $taskUpdate->task = $request->editedtask;
    //     $taskUpdate->save();
    //     //dd($taskUpdate);
    //     return redirect("/tasklist");
    // }

    // public function deleteTask($id){
    //     $taskDelete = Task::find($id); //id
    //     $taskDelete->delete();
    //     return redirect("/tasklist");
    // }
}
