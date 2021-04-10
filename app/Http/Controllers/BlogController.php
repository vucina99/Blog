<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function home(){
        return view("posts");
    }
    public function createPost(){
        return view("create_blog");
    }
    public function postCreate(Request $request){
        $this->validate($request, [
            "title" => "required|min:2|max:50",
            "description" => "required|min:2|max:1000",
            "image" => "required|max:2048"
        ]);
        $post = new Blog();
        $post->title = $request->title;
        $post->description = $request->description;

        $imageName = time().'.'.$request->file("image")->getClientOriginalExtension();
        $request->file("image")->move(public_path('/blogImage'), $imageName);
        $post->image = $imageName;

        $post->user_id = 1;

        $post->save();

        return back()->with("successMessage" , "You have successfully created a post, it will be processed soon");

    }
}
