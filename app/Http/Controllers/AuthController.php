<?php

namespace App\Http\Controllers;

use App\Jobs\ForgotUserEmailJob;
use App\Mail\ForgotPassword;
use App\Models\User;
use App\Models\Groups;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {

        // Валидация данных

        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"],
        ]);

        // Валидация каптчи

        $request->validate([
            
            'captcha'=>['required','captcha'],
        ]);

        // Перенаправление пользователя 

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

        $groups = Groups::orderBy("created_at",'DESC')->get();

        return view("auth.register",["groups"=>$groups]);
    }


    // Регистрация пользователя

    public function register(Request $request)
    {

        $input = array("Медецинского центра", "Спортивного центра", "Ресторана быстрого питания", "Сервиса хранения паролей", "Компании на произвольную тему", "Финансовой пирамиды", "Парикмахерской" ,"Салона красоты") ;
        $value = $input[array_rand($input)];
        // Валидация данных 
        $data=$request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            'captcha'=>['required','captcha'],
            'group_id'=>["required","exists:groups,id"],
            "password" => ["required", "confirmed",Rules\Password::defaults()],
        ]);
        
        // Создание массива и хэширование пароля
        $user = User::create([
            "name"=>$data["name"],
            "email"=>$data["email"],
            "title"=>$value,
            "group_id"=>$data["group_id"],
            "password"=>bcrypt($data["password"]),
        ]);
        // Проверка пользователя
        if($user){
            auth("web")->login($user);
        }
        // Перенапрвление пользователя
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
