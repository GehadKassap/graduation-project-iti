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


Route::get('/', function () {
    return view('user.index');
});
Route::get('/home', function () {
    return view('user.index');
});
/********* our categories (show)****** */
Route::get('/allcategories', function () {
    return view('user.products.homeCategories');
});
Route::get('/electronices',[ProductController ::class,'showelectronies']);
Route::get('/books',[ProductController ::class,'showbooks']);
Route::get('/cosmatics',[ProductController ::class,'showcosmatics']);
Route::get('/furniture',[ProductController ::class,'showfurniture']);
Route:: get('/fashion',[ProductController::class,'show']);


//checkout
Route::get('/checkout', function () {return view('user.products.checkout ');});
//contactus
Route::get('/contactus', function () {return view('user.products.contactus  ');});
Route::get('/signin', function () {
    return view('user.Auth.signin');
});
Route::get('/forgetpass', function () {
    return view('user.Auth.forgetpass');
});


//favorite
// Route::get('/favorite', function () {return view('user.products.favorite');});
//cart details
// Route::get('/cart', function () {return view('user.products.cartdetails');});
//profile
Route::get('/profile', function () {return view('user.products.profile');});




//add to cart
Route::post("add_to_cart",[ProductController::class,'addToCart']);

Route::post("fashion",[ProductController::class,'addtocart']);
Route::post("furniture",[ProductController::class,'addtocart']);
Route::post("electronices",[ProductController::class,'addtocart']);
Route::post("books",[ProductController::class,'addtocart']);
Route::get("cartdetails",[ProductController::class,'cartlist']);

Route::get("removecart/{id}",[ProductController::class,'removecart']);


//wishlist

Route::post("fashion",[ProductController::class,'addtofav']);
Route::post("furniture",[ProductController::class,'addtofav']);
Route::post("electronics",[ProductController::class,'addtofav']);
Route::post("books",[ProductController::class,'addtofav']);
Route::get("favdetails",[ProductController::class,'favlist']);
Route::get("removefav/{id}",[ProductController::class,'removefav']);
Route::get("removeall/{id}",[ProductController::class,'removeall']);
/**************search and product details routes************ */
//search
Route::get('/search',[ProductController::class , "searchProduct"]);

//details for each product
 Route::get('/details/{id}',[ProductController::class , "detailsProduct"]);

/*********** registration routes************** */
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
