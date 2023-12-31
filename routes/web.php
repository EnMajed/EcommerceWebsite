<?php

use App\Http\Controllers\Admin\{
    AdminController
};
use App\Http\Controllers\Frontend\{
    FrontendController
};
use Illuminate\Support\Facades\Route;

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

Route::get('/',[FrontendController::class , 'index'])->name('frontend.index');
Route::get('/cart',[FrontendController::class , 'cart'])->name('frontend.cart');
Route::get('/checkout',[FrontendController::class , 'checkout'])->name('frontend.checkout');
Route::get('/detail',[FrontendController::class , 'detail'])->name('frontend.detail');
Route::get('/shop',[FrontendController::class , 'shop'])->name('frontend.shop');



Route::get('/admin/login',[AdminController::class , 'login'])->name('admin.login');
Route::get('/admin/index',[AdminController::class , 'index'])->name('admin.index');
Route::get('/admin/forgot-password',[AdminController::class , 'forgot_password'])->name('admin.forgot_password');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


