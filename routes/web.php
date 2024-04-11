<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::middleware("auth")->group(function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/posts/comment/{id}', [PostController::class, 'comment'])->name('comment'); 
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});




Route::middleware("guest")->group(function(){
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process'); 

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');

    Route::get('/reload-captcha', [AuthController::class, 'reloadCaptcha']);
    Route::post('/post', [AuthController::class, 'post']);
});



Route::get("/contacts", [IndexController::class, 'showContactForm'])->name('contact');
Route::post('/contact_form_process', [IndexController::class, 'contactForm'])->name('contact_form_process'); 

Route::get('/lgots', function(){
    return view('article.svo'); 
})->name('lgots');

Route::get('/rend', function(){
    return view('article.rend'); 
})->name('rend');

Route::get('/servis', function(){
    return view('article.servis'); 
})->name('servis');

Route::get('/coruption', function(){
    return view('article.coruption'); 
})->name('coruption');




