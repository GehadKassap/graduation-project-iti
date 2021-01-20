<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\ProductController;

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


Route::get('/allcategories', function () {
    return view('user.products.homeCategories');
});
// Route::get('/fashion', function () {
//     return view('user.products.fashion');
// });


Route:: get('/fashion',[ProductController::class,'show']);
Route:: get('/books',[ProductController ::class,'showbooks']);
Route:: get('/furniture',[ProductController ::class,'showfurniture']);

Route::get('/',[ProductController ::class,'showhomeproduct']);
Route::get('/home',[ProductController ::class,'showhomeproduct']);

Route::get('/cosmatics',[ProductController ::class,'showcosmatics']);
Route::get('/electronices',[ProductController ::class,'showelectronies']);

Route::get('/signin', function () {
    return view('user.Auth.signin');
});
Route::get('/forgetpass', function () {
    return view('user.Auth.forgetpass');
});


//favorite
Route::get('/favorite', function () {return view('user.products.favorite');});
//cart details
// Route::get('/cart', function () {return view('user.products.cartdetails');});
//profile
Route::get('/profile', function () {return view('user.products.profile');});
//checkout
Route::get('/checkout ', function () {return view('user.products.checkout ');});
//contactus
Route::get('/contactus  ', function () {return view('user.products.contactus  ');});
//productdetails
// Route::get('/productdetails   ', function () {return view('user.products.productdetails   ');});

Route::post('/register',[UserController::class , "handleForm"]);

//user signIn
Route::get('/login',[UserController::class , "loginForm"]);
Route::post('/login',[UserController::class , "handleLogin"]);

//user signUp
Route::get('/register',[UserController::class , "registerForm"]);
Route::post('/register',[UserController::class , "handleForm"]);

// user logout
Route::get('/logout' , function(){
    Session::forget('user');
    return view('user.Auth.signin');
});
//search
Route::get('/search',[ProductController::class , "searchProduct"]);

Route::get('/details/{id}',[ProductController::class , "detailsProduct"]);

// Route::get('/details/{id}/category/{catid}',[ProductController::class , "detailsProduct"]);


Route::post("fashion",[ProductController::class,'addtocart']);
Route::post("furniture",[ProductController::class,'addtocart']);
Route::get("cartdetails",[ProductController::class,'cartlist']);

Route::get("removecart/{id}",[ProductController::class,'removecart']);



