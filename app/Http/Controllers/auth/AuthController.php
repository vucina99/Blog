<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function register(){
        return view("auth.register");
    }

    public function registerUser(Request $request){
        $this->validate($request, [
            "name" => "required|min:2|max:50",
            "email" => "required|min:2|max:200|email",
            "password" => "required|min:5|max:50|confirmed",
            "password_confirmation" => "required|min:6"

        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect("/");
    }


    public function loginUser(Request $request){
        $this->validate($request, [
            "email" => "required|min:2|max:200|email",
            "password" => "required|min:5|max:50",

        ]);
        $user = User::where("email" , $request->email)->first();

        if($user){

            if(Hash::check($request->password , $user->password)){
                Auth::login($user);

                return redirect("/");
            }

        }

        return back()->with("errorLogin" , "Email or password is not correct");
    }


    public function logout(){
       Auth::logout();
       return redirect("/");
    }
}
