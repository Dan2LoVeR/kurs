<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\CommentForm;
use App\Http\Requests\GradesForm;
use App\Models\Image;
use App\Models\Grades;

use function Laravel\Prompts\alert;

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
        
    public function comment($id, Request $request)
    {
        $post = Post::findOrFail($id);

        $post->comments()->create($request->validated());

        return redirect(route("posts.show", $id));
    }
    
    public function grades( Request $request)
    {
        
        $numb = array_sum( array( intval($request->f),intval($request->s),intval($request->t),intval($request->fo),intval($request->fi),intval($request->si)));
        if($numb==1 or $numb==2 or $numb==0)$result=2;
        elseif($numb==3)$result=3;
        elseif($numb==4 or $numb==5)$result=4;
        else $result=5;

        Grades::create([
            'name'=>$request->name,
            'result'=>$result,
            'user_id' => auth()->id()
        ]);

        $count = intval($request->name)+1;
        return redirect(route(strval($count).'test'));
    }

    public function image( Request $request){

        $path = $request->file('image')->store('uploads', 'public');
        $name = $request->all(['name']);
        Image::create([
            'path'=>$path,
            'user_id' => auth()->id(),
            
        ]);

        return redirect(route('profile.edit'));

    }

    public function finish(){
       $path = Image::orderBy("created_at", "DESC")->get();

       return view('lessons.test.finish', [
           "path" => $path,
           
       ]); 
    }
}
