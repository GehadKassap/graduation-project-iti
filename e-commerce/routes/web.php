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

Route::post("fashioncart",[ProductController::class,'addtocart']);
Route::post("furniturecart",[ProductController::class,'addtocart']);
Route::post("electronicescart",[ProductController::class,'addtocart']);
Route::post("cosmaticscart",[ProductController::class,'addtocart']);
Route::post("bookscart",[ProductController::class,'addtocart']);
Route::get("cartdetails",[ProductController::class,'cartlist']);

Route::get("removecart/{id}",[ProductController::class,'removecart']);


//wishlist

Route::post("fashionfav",[ProductController::class,'addtofav']);
Route::post("furniturefav",[ProductController::class,'addtofav']);
Route::post("electronicesfav",[ProductController::class,'addtofav']);
Route::post("cosmaticsfav",[ProductController::class,'addtofav']);
Route::post("booksfav",[ProductController::class,'addtofav']);
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
    //
    //Session::flush();
    Auth::logout();
    Session::forget('user');
    Session::flush();
    return view('user.Auth.signin');
});


// checkout
Route::post('success', [ UserController::class, "userUpdate" ]);
