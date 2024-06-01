<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\WishlistController;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[Dashboard::class,'index']);

Route::get('/login_register',function () {

    return view('userside.login_register');
});
Route::get('/home',[Dashboard::class,'index']);
Route::resource('/banners',BannerController::class);
Route::resource('/categories',CategoryController::class);
Route::resource('/subcategories',SubcategoryController::class);
Route::resource('/product1',ProductController::class);
Route::get('/product1/create/{id}',[ProductController::class,'create1']);

Route::get('/shop',[ProductController::class,'getAll']);


Route::get('/about',[AdminController::class,'about']);
Route::get('/contact',[AdminController::class,'contact']);


Route::post('store',[AdminController::class,'store']);
Route::get('register_admin',[AdminController::class,'index']);
Route::post('store',[PersonController::class,'store']);
Route::get('person/u_register',[PersonController::class,'index']);
Route::post('Login_user',[PersonController::class,'Login_user']);
Route::get('person/u_login',[PersonController::class,'index1']);

Route::get('/add/wishlist/{id}',[WishlistController::class,'addWishlist']);
Route::get('/wishlist',[WishlistController::class,'index']);

Route::get('/wishlist/remove/{id}',[WishlistController::class,'removeWishlist']);

Route::get('/wishlist/addremove/{id}',[WishlistController::class,'removeAddWishlist']);



Route::get('/adminhome', function () {
    return view('adminhome');
});
Route::get('/client', function () {
    return view('user.client');
});
// Route::get('/contact', function () {
//     return view('user.contact');
// });
Route::get('/products', function () {
    return view('user.products');
});
Route::get('/dashboard',[Dashboard::class,'index']);
Route::get('/userside/cart', function () {
    return view('userside.cart');
});
Route::get('/userside/productdetail', function () {
    return view('userside.productdetail');
});

Route::get('/product/details/{id}',[ProductController::class,'getProductById']);
Route::get('addtocart/{id}',[OrderController::class,'addtocart']);
Route::get('/cart',[OrderController::class,'index']);
// Route::get('/contact', function () {
//     return view('userside.contact');
// });

Route::get('/removeorder/{id}/delete',[OrderController::class,'destroy']);
Route::get('/update/{id}/plus',[OrderController::class,'plus']);
Route::get('/update/{id}/minus',[OrderController::class,'minus']);

Route::resource('/coupon',ProductController::class);
Route::get('/subcat/{id}',[SubcategoryController::class,'getSubCateogry']);
Route::post('/register',[PersonController::class,'store']);
Route::post('/loggedin',[PersonController::class,'loggedin']);

Route::get('/shop/{id}',[ProductController::class,'getProducts']);

Route::get('/index',[PersonController::class,'index']);

Route::get('/lowtohigh',[ProductController::class,'getProductsLowtohight']);
Route::get('/hightolow',[ProductController::class,'getProductshightolow']);

Route::get('/newarrivals',[ProductController::class,'getProductsLatest']);
Route::post('/store/contact',[ContactController::class,'store']);
Route::resource('/contact1',ContactController::class);

Route::post('/add/review',[ReviewController::class,'addReview']);
Route::get('/adminhome', [AdminController::class,'index1']);

Route::get('/logout', [AdminController::class,'logout']);

Route::post('/checkout',[OrderController::class,'checkout']);
//   Route::get('/show/payment/form',[OrderController::class,'showPaymentForm']);

Route::post('/search',[ProductController::class,'search']);
