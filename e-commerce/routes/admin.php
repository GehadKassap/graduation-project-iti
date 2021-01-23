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
Route::resource("admin/users", admin\UsersController::class);
Route::resource("admin/dashboard", admin\dashboardController::class);
Route::resource("admin/profile", admin\profileController::class);
Route::resource("admin/editprofile", admin\editprofileController::class);
Route::resource("admin/offers", admin\offersController::class);
Route::resource("admin/orders", admin\ordersController::class);
Route::resource("admin/orderdetails", admin\orderdetailsController::class);
Route::resource("admin/sidenav", admin\sidenavController::class);
Route::resource("admin/promotion", admin\promotionController::class);






 




//admin-Promotion
// Route::get('admin/profile', function () {
//     return view('admin.profile');
// });

//admin-offers
Route::get('admin/login', function () {
    return view('admin.auth.adminlogin');
});

//admin-support
Route::get('admin/forgetpass', function () {
    return view('admin.auth.forgetpass');
});
/****************************** */

/********routesMohamed */

Route::resource("products", admin\ProductController::class);
Route::resource("problems", admin\ProblemController::class);

/****************************** */
/*******************Gehad***/
// user logout
Route::get('/logout', function () {
    //Session::forget('user');
    Cookie::queue(Cookie::forget('user'));
    return view('user.Auth.signin');
});
/**************************** */