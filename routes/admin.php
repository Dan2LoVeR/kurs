<?php


use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\PostController;
use \App\Http\Controllers\Admin\AuthController;


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
Route::get('/', function () {
    return redirect('/admin/posts');
});

Route::middleware("guest:admin")->group(function() {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login_process', [AuthController::class, 'login'])->name('login_process');
});

Route::middleware("auth:admin")->group(function() {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('admin_users', \App\Http\Controllers\Admin\AdminUserController::class);
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
});











