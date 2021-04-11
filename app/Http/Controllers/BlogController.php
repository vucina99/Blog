<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function home(){
        if(Auth::check() && Auth::user()->is_admin == 1){
            $countPosts = Blog::where("active" , 0)->count();
            $posts = Blog::where("active" , 1)->simplePaginate(20);
            return view("posts" , compact("posts" , "countPosts"));
        }
        $posts = Blog::where("active" , 1)->simplePaginate(20);
        return view("posts" , compact("posts"));
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

        $post->user_id = Auth::user()->id;

        $post->save();

        return back()->with("successMessage" , "You have successfully created a post, it will be processed soon");

    }

    public function myPosts(){
        $posts = Blog::where("user_id" , Auth::user()->id)->simplePaginate(10);
        return view("my_posts", compact("posts"));
    }
    public function notAccept(Request $request){
        $blog = Blog::find($request->blog_id);

        if($blog){
            $blog->delete();
            return back()->with("successDelete" , "Success deleted post");
        }
    }


    public function editPost(Request $request){
        $post = Blog::where("id" , $request->blog_id)->first();

        if($post){
            return view("editMyPost" , compact("post"));
        }
        return back();

    }

    public function postEdit(Request $request){

        $this->validate($request, [
            "title" => "required|min:2|max:50",
            "description" => "required|min:2|max:1000",
        ]);

        $post = Blog::find($request->id);

        if($post){

            $post->title = $request->title;
            $post->description = $request->description;

            if($request->file("image")){

                $imageName = time().'.'.$request->file("image")->getClientOriginalExtension();
                $request->file("image")->move(public_path('/blogImage'), $imageName);
                $post->image = $imageName;

            }

            $post->save();

            return redirect("/my/posts")->with("successMessageEdit" , "Success edited post");


        }
         return redirect("/my/posts");
    }

    public function showPost($id){

        if(Auth::check() && Auth::user()->is_admin == 1){
            $post = Blog::find($id);
            $countPosts = Blog::where("active" , 0)->count();
            if(!$post){
                return back();
            }

            return view("showPost" , compact("post", "countPosts"));
        }
        $post = Blog::find($id);

        if(!$post){
            return back();
        }

        return view("showPost" , compact("post"));
    }
}
