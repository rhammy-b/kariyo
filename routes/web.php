<?php

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


Route::get('sign-up','PagesController@getSignup' ) -> name('pages.sign-up');
Route::get('login','PagesController@getLogin' ) -> name('pages.login');
Route::get('product-details','PagesController@getProductdetails' ) -> name('pages.product-details');
Route::get('checkout','PagesController@getCheckout' ) -> name('pages.checkout');
Route::get('shop-cart','PagesController@getShopcart' ) -> name('pages.shop-cart');
Route::get('blog','PagesController@getBlog' ) -> name('pages.blog');
Route::get('shop','PagesController@getShop' ) -> name('pages.shop');
Route::get('contact','PagesController@getContact' ) -> name('pages.contact');

Route::get('/','PagesController@getIndex' ) -> name('pages.index');
Route::resource('posts', 'PostController');



// Route::get('/', function () {
//     return view('index');
// });
