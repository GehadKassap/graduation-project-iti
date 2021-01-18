<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\admin;

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


// Route::middleware('UserAuth')->group(function(){
//     Route::resource("admin/users",admin\UsersController::class);
// });

// Route::get('notauth' , function(){
//     return "you are not admin";
// });




/********routes abeer */
//->middleware('UserAuth')
//resource
Route::resource("admin/users",admin\UsersController::class);
Route::resource("admin/dashboard",admin\dashboardController::class);

//admin-Promotion
Route::get('admin/Promotion', function () {
    return view('admin.Promotion');
});

//admin-offers
Route::get('admin/offers', function () {
    return view('admin.offers');
});

//admin-support
Route::get('admin/support', function () {
    return view('admin.support');
});
/****************************** */

/********routesMohamed */

Route::resource("products", admin\ProductController::class);
/****************************** */
/*******************Gehad***/
// user logout
Route::get('/logout' , function(){
    Session::forget('user');
    return view('user.Auth.signin');
});
/**************************** */
