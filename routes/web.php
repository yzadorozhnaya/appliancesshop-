<?php

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
Route::get('/index', 'ProjectController@index') -> name('index');

Route::get('/about', 'ProjectController@about') -> name('about');

Route::get('/blog', 'ProjectController@blog') -> name('blog');

Route::get('/cart', 'ProjectController@cart') -> name('cart');

Route::get('/checkout', 'ProjectController@checkout') -> name('checkout');

Route::get('/contact', 'ProjectController@contact') -> name('contact');

Route::get('/forgot', 'ProjectController@forgot') -> name('forgot');

Route::get('/login', 'ProjectController@login') -> name('login');

Route::get('/product/{id}', 'ProjectController@product') -> name('product');

Route::get('/register', 'ProjectController@register') -> name('register');

Route::get('/shop/{slug}', 'ProjectController@shop') -> name('shop');

Route::get('/categories', 'ProjectController@categories') -> name('categories');

//Route::get('/shop', 'ProjectController@shop') -> name('shop');

Route::get('/single', 'ProjectController@single') -> name('single');

Route::get('/terms', 'ProjectController@terms') -> name('terms');

Route::get('/wishlist', 'ProjectController@wishlist') -> name('wishlist');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
