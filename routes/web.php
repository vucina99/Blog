<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\auth\AuthController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [BlogController::class, 'home']);

Route::get("/contact", [BlogController::class, 'contact']);
Route::post("/sendEmail", [BlogController::class, 'mailSend']);



Route::get("/show/post/{id}", [BlogController::class, 'showPost']);

Route::middleware(["auth"])->group(function(){
    Route::get("/logout", [AuthController::class, 'logout']);
    Route::post("/notaccept", [BlogController::class, 'notAccept']);

});


Route::middleware(["guest"])->group(function(){
    Route::get("/login", [AuthController::class, 'login']);
    Route::get("/register", [AuthController::class, 'register']);
    Route::post("/register/user", [AuthController::class, 'registerUser']);
    Route::post("/login/user", [AuthController::class, 'loginUser']);


});

Route::middleware(["AdminMiddle"])->group(function(){
    Route::get("/all/users", [AdminController::class, 'allUsers']);
    Route::get("/inactive/posts", [AdminController::class, 'inactiveBlog']);
    Route::post("/accept/post", [AdminController::class, 'acceptPost']);
    Route::get("/all/posts", [AdminController::class, 'allPosts']);
    Route::get("/category", [AdminController::class, 'categories']);


});

Route::middleware(["UserMiddle"])->group(function(){
    Route::get("/create/post", [BlogController::class, 'createPost']);
    Route::post("/post/create", [BlogController::class, 'postCreate']);
    Route::get("/my/posts", [BlogController::class, 'myPosts']);

    Route::get("/edit/post", [BlogController::class, 'editPost']);
    Route::post("/post/edit", [BlogController::class, 'postEdit']);

});
