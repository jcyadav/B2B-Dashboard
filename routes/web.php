<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
// Route::post('register', [
//     'uses' => 'App\Http\Controllers\Auth\RegisterController@register',
//     'as' => 'register'
// ]);
// Route::get('register', 'Auth\RegisterController@register')->name('register');
    Route::get('/admin/login',[AdminLoginController::class,'showLoginForm']);
    Route::post('/admin/login',[AdminLoginController::class,'showLoginForm'])->name('admin.login');
    // Route::post('/admin/secure/login', [AdminLoginController::class,'adminLogin'])->name('admin.login');
Route::get('/index',[HomeController::class,'index']);
Route::get('/index-2',[HomeController::class,'index2']);
Route::get('/employee',[HomeController::class,'employee']);
Route::get('manage-client',[HomeController::class,'manageclient']);
Route::get('reports',[HomeController::class,'reports']);
Route::get('app-profile',[HomeController::class,'profile']);
Route::get('email-inbox',[HomeController::class,'emailinbox']);
Route::get('/',[HomeController::class,'login']);
Route::get('register',[HomeController::class,'register']);
Route::post('/register/user',[UserController::class,'registerUser'])->name('register-user');

Route::post('/login/user',[UserController::class,'loginUser'])->name('login-user');

Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController::class,'logout']);
Route::get('/admin',[CustomAuthController::class,'frontend.index']);
