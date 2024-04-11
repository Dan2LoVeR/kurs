<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\CommentForm;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::orderBy("votes", ">",100)->SimplePaginate(4);

        

        return view('posts.index', [
            "posts"=>$posts,
        ]);
        
    }

    public function show($id)
    {
        $post = Post::with("comments.user")->findOrFail($id);
        return view("posts.show",[
            "post"=>$post,
        ]);
    }
        
    public function comment($id, CommentForm $request)
    {
        $post = Post::findOrFail($id);

        $post->comments()->create($request->validated());

        return redirect(route("posts.show", $id));
    }
}
