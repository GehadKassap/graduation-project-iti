<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/allcategories', function () {
    return view('user.homeCategories');
});

Route::get('/signin', function () {
    return view('user.Auth.signin');
});
Route::get('/forgetpass', function () {
    return view('user.Auth.forgetpass');
});
//user signUp
Route::get('/register',[UserController::class , "registerForm"]);
Route::post('/register',[UserController::class , "handleForm"]);

//user signIn
Route::get('/login',[UserController::class , "loginForm"]);
Route::post('/login',[UserController::class , "handleLogin"]);
