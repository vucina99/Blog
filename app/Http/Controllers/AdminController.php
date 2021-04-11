<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function allUsers(){
        $countPosts = Blog::where("active" , 0)->count();
        $users = User::where("id" , "!=" , Auth::user()->id)->simplePaginate(15);
        return view("all_users" , compact("users" , "countPosts"));
    }

    public function inactiveBlog(){
        $countPosts = Blog::where("active" , 0)->count();

        $posts = Blog::where("active" , 0)->simplePaginate(15);

        return view("inactive_blog" , compact("posts", "countPosts"));

    }

    public function acceptPost(Request $request){
        $post = Blog::find($request->blog_id);

        if(!$post){
            return back();
        }

        $post->active = 1;
        $post->save();
        return back()->with("successAccepted" , "Post is successfully accepted");

    }

    public function allPosts(){
        $countPosts = Blog::where("active" , 0)->count();

        $posts = Blog::where("active" , 1)->simplePaginate(15);
        return view("all_posts" , compact("posts", "countPosts"));
    }
}
