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
Route::get('/', 'ProjectController@index') -> name('index');

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

Route::get('/single/{slug}', 'ProjectController@single') -> name('single');

Route::get('/terms', 'ProjectController@terms') -> name('terms');

Route::get('/wishlist', 'ProjectController@wishlist') -> name('wishlist');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function()
//{
//    Route::get('/admin/edit', 'Admin\AdminController@adminEdit')->name('admin.edit');
//});
Route::get('/admin/list', 'AdminController@adminList')->name('admin.list');
Route::get('/admin/edit/{id}', 'AdminController@adminEdit')->name('admin.edit');
Route::post('/admin/save/{id?}', 'AdminController@adminSave')->name('admin.save');
Route::get('/admin/delete/{id}', 'AdminController@adminDelete')->name('admin.delete');
Route::get('/admin/create', 'AdminController@adminCreate')->name('admin.create');