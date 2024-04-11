<?php

namespace App\Http\Controllers;

use App\Jobs\ForgotUserEmailJob;
use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {

        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"],
        ]);

        $request->validate([
            
            'captcha'=>['required','captcha'],
        ]);

        if(auth("web")->attempt($data)) {
            return redirect(route("home"));
        }

        return redirect(route("login"))->withErrors(["email" => "Пользователь не найден, либо данные введены не правильно"]);
    
    }


    public function showLoginForm()
    {
        return view("auth.login");
    }


    public function logout(){
        auth("web")->logout();
        return redirect(route("home"));
    }


    public function showRegisterForm()
    {
        return view("auth.register");
    }


    public function register(Request $request)
    {

        $data=$request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            'captcha'=>['required','captcha'],
            "password" => ["required", "confirmed",Rules\Password::defaults()],
        ]);

        $user = User::create([
            "name"=>$data["name"],
            "email"=>$data["email"],
            "password"=>bcrypt($data["password"]),
        ]);

        if($user){
            auth("web")->login($user);
        }

        return redirect(route("home"));
    }


    

    public function reloadCaptcha(){
        
        return response()-> json(['captcha'=>captcha_img()]);
    }

    public function post(Request $request){

        $request->validate([
            
            'captcha'=>'required|captcha',
        ]);
    }

    
}
