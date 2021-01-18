<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\TestController;

use App\Http\Controllers\Controller;
=======
>>>>>>> aba3cbfbc1596f863c6df693e2dce7dfd0db7b4b
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

// Route::get('/', function () {
//     return view('welcome');
// });

//admin-dashboard
<<<<<<< HEAD
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//admin-orders
Route::get('/orders', function () {
    return view('admin.orders');
});

//admin-order-details
Route::get('/order-details', function () {
    return view('admin.orderdetails');
});

//admin-users
Route::get('/users', function () {
    return view('admin.users');
});

//admin-products
Route::get('/products', function () {
    return view('admin.products');
});

//admin-add-product
Route::get('/add-product', function () {
    return view('admin.addnewproduct');
});

//admin-Promotion
Route::get('/Promotion', function () {
    return view('admin.Promotion');
});

//admin-offers
Route::get('/offers', function () {
    return view('admin.offers');
});

//admin-support
Route::get('/support', function () {
    return view('admin.support');
});


Route::resource("products", admin\ProductController::class);
=======
Route::get('admin/dashboard', function () {return view('admin.dashboard');});

//admin-orders
Route::get('admin/orders', function () {return view('admin.orders');});

//admin-order-details
Route::get('admin/order-details', function () {return view('admin.orderdetails');});

//admin-users
// Route::get('admin/users', function () {return view('admin.users');});
// Route::get('admin/users',[admin\UsersController::class,"index"])
// ->name("users.index");

//admin-products
Route::get('admin/products', function () {return view('admin.products');});

//admin-add-product
Route::get('admin/add-product', function () {return view('admin.addnewproduct');});

//admin-Promotion
Route::get('admin/Promotion', function () {return view('admin.Promotion');});

//admin-offers
Route::get('admin/offers', function () {return view('admin.offers');});

//admin-support
Route::get('admin/support', function () {return view('admin.support');});

//resource 
Route::resource("admin/users",admin\UsersController::class);
>>>>>>> aba3cbfbc1596f863c6df693e2dce7dfd0db7b4b
