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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function()
{

Route::get('/users/list', 'AdminController@adminUsersList')->name('admin.users.list');
Route::get('/users/edit/{id}', 'AdminController@adminUsersEdit')->name('admin.users.edit');
Route::post('/users/save/{id?}', 'AdminController@adminUsersSave')->name('admin.users.save');
Route::get('/users/delete/{id}', 'AdminController@adminUsersDelete')->name('admin.users.delete');
Route::get('/users/create', 'AdminController@adminUsersCreate')->name('admin.users.create');

Route::get('/products/list', 'AdminController@adminProductsList')->name('admin.products.list');
Route::get('/products/edit/{id}', 'AdminController@adminProductsEdit')->name('admin.products.edit');
Route::post('/products/save/{id?}', 'AdminController@adminProductsSave')->name('admin.products.save');
Route::get('/products/delete/{id}', 'AdminController@adminProductsDelete')->name('admin.products.delete');
Route::get('/products/create', 'AdminController@adminProductsCreate')->name('admin.products.create');

Route::get('/categories/list', 'AdminController@adminCategoriesList')->name('admin.categories.list');
Route::get('/categories/edit/{id}', 'AdminController@adminCategoriesEdit')->name('admin.categories.edit');
Route::post('/categories/save/{id?}', 'AdminController@adminCategoriesSave')->name('admin.categories.save');
Route::get('/categories/delete/{id}', 'AdminController@adminCategoriesDelete')->name('admin.categories.delete');
Route::get('/categories/create', 'AdminController@adminCategoriesCreate')->name('admin.categories.create');

});