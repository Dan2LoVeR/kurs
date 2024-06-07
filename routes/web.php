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

Route::get('/test-jquery', function () {
    return view('test-jquery');
});


Route::middleware("auth")->group(function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/1test', function(){return view('lessons.test.one');})->name('1test');
    Route::post('/1test_process', [PostController::class, 'grades'])->name('1test_process');
    Route::get('/2test', function(){return view('lessons.test.two');})->name('2test');
    Route::get('/3test', function(){return view('lessons.test.three');})->name('3test');
    Route::get('/4test', function(){return view('lessons.test.four');})->name('4test');
    Route::get('/5test', function(){return view('lessons.test.five');})->name('5test');
    Route::get('/6test', function(){return view('lessons.test.six');})->name('6test');
    Route::get('/7test', function(){return view('lessons.test.seven');})->name('7test');
    Route::get('/8test', function(){return view('lessons.test.eight');})->name('8test');
    Route::get('/first_test', [IndexController::class, "testShow"])->name('finish');
    Route::post('/image', [PostController::class, 'image'])->name('image');
    Route::post('/imageLogo', [PostController::class, 'imageLogo'])->name('imageLogo');
    Route::post('/back', [PostController::class, 'back'])->name('back');
    
    Route::get('/finish', [PostController::class, 'finish'])->name('9test');
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

Route::get('/lessons', function(){return view('lessons.index'); })->name('lessons');

Route::get('/first', function(){return view('lessons.partials.first'); })->name('first');

Route::get('/second', function(){return view('lessons.partials.second'); })->name('second');
Route::get('/third', function(){return view('lessons.partials.third'); })->name('third');
Route::get('/fourth', function(){return view('lessons.partials.fourth'); })->name('fourth');
Route::get('/fifth', function(){return view('lessons.partials.fifth'); })->name('fifth');
Route::get('/sixth', function(){return view('lessons.partials.sixth'); })->name('sixth');
Route::get('/seventh', function(){return view('lessons.partials.seventh'); })->name('seventh');
Route::get('/eighth', function(){return view('lessons.partials.eighth'); })->name('eighth');
Route::get('/nineth', function(){return view('lessons.partials.nineth'); })->name('nineth');




