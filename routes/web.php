<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\auth\AuthController;
use \App\Http\Controllers\BlogController;
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
Route::get("/create/post", [BlogController::class, 'createPost']);
Route::post("/post/create", [BlogController::class, 'postCreate']);

Route::middleware(["auth"])->group(function(){
    Route::get("/logout", [AuthController::class, 'logout']);

});


Route::middleware(["guest"])->group(function(){
    Route::get("/login", [AuthController::class, 'login']);
    Route::get("/register", [AuthController::class, 'register']);
    Route::post("/register/user", [AuthController::class, 'registerUser']);
    Route::post("/login/user", [AuthController::class, 'loginUser']);

});

Route::middleware(["AdminMiddle"])->group(function(){

});

Route::middleware(["UserMiddle"])->group(function(){

});
