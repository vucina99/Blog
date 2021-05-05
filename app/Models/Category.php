<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function blogs(){

        return $this->hasMany("App\Models\Blog");

    }

    public function countBlogs($id){
        $blogs = Blog::where("category_id" , $id )->where("active" , 1)->count();
        return $blogs;
    }
}
