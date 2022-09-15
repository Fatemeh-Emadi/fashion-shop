<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ProductController::class, 'shop']);
Route::get('/shop-single', [HomeController::class, 'shop_single']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/product/{id}',[ProductController::class, "index"] );
Route::get('/category/{id}',[ProductController::class, "get_by_category"] );

Route::get('/register', [UserController::class, 'register_get']);
Route::post('/register', [UserController::class, 'register_post']);

Route::get('/login', [UserController::class, 'login_get']);
Route::post('/login', [UserController::class, 'login_post']);

Route::get('/profile', [UserController::class, 'profile']);

Route::get('/logout', [UserController::class, 'logout']);
Route::get('/logout-admin', [AdminController::class, 'logout']);

Route::post('/send-rating',[ProductController::class,'add_rating']);

Route::get('/admin/carts', [CartController::class, 'get_all'])->middleware("auth");
Route::post('/add-to-cart', [CartController::class, 'add']);

Route::get('/cart', [CartController::class, 'get'])->middleware("auth");

Route::post('/send-comment',[CommentController::class,'send_comment']);

Route::get('/cart/delete/{id}', [CartController::class, 'delete']);


Route::post('/search',[ProductController::class,'search']);

Route::get('/admin', [AdminController::class, 'index'])->middleware("auth");
Route::get('/admin/cities', [CityController::class, 'get_all'])->middleware("auth");

Route::get('/admin/products', [ProductController::class, 'get_all'])->middleware("auth");

Route::get('/admin/users', [UserController::class, 'get_all'])->middleware("auth");

Route::get('/admin/comments', [CommentController::class, 'get_all']);

Route::get('/admin/carts', [CartController::class, 'get_all'])->middleware("auth");

Route::get('/admin/cities/add', [CityController::class, 'add_get'])->middleware("auth");
Route::post('/admin/cities/add', [CityController::class, 'add_post'])->middleware("auth");

Route::get('admin/cities/edit/{id}', [CityController::class, 'edit_get'])->middleware("auth");
Route::post('admin/cities/edit', [CityController::class, 'edit_post'])->middleware("auth");

Route::get('admin/products/edit/{id}', [ProductController::class, 'edit_get'])->middleware("auth");
Route::post('admin/products/edit', [ProductController::class, 'edit_post'])->middleware("auth");

Route::get('admin/cities/delete/{id}', [CityController::class, 'delete'])->middleware("auth");
Route::get('admin/users/delete/{id}', [UserController::class, 'delete'])->middleware("auth");
Route::get('admin/products/delete/{id}', [ProductController::class, 'delete'])->middleware("auth");
Route::get('admin/comments/delete/{id}', [CommentController::class, 'delete']);

Route::get('/admin/products/add', [ProductController::class, 'add_get'])->middleware("auth");
Route::post('/admin/products/add', [ProductController::class, 'add_post'])->middleware("auth");

Route::get('/login-admin', [AdminController::class, 'admin_login_get']);
Route::post('/login-admin', [AdminController::class, 'admin_login_post']);

