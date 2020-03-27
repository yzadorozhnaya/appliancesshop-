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

Route::get('/newarrivals/{slug}', 'ProjectController@newarrivals') -> name('newarrivals');

Route::get('/about', 'ProjectController@about') -> name('about');

Route::get('/forgot', 'ProjectController@forgot') -> name('forgot');

Route::get('/login', 'ProjectController@login') -> name('login');

Route::get('/register', 'ProjectController@register') -> name('register');

Route::get('/categories', 'ProjectController@categories') -> name('categories');

Route::get('/terms', 'ProjectController@terms') -> name('terms');




Route::get('/product/{id}', 'ProductController@product') -> name('product');

Route::post('/prodact/addComment/{id}', 'ProductController@addComment')->name('prodact.addComment');

Route::get('/shop/{slug}', 'ProductController@shop') -> name('shop');

Route::get('/products', 'ProductController@shop') -> name('products');


Route::get('/pricedown/{slug?}', 'ProductController@pricedown') -> name('pricedown');

Route::get('/priceup/{slug?}', 'ProductController@priceup') -> name('priceup');

Route::post('/product/search', 'ProductController@product_search') -> name('product.search');



Route::get('/blog', 'BlogController@blog') -> name('blog');

Route::get('/blogsingle/{id?}', 'BlogController@blogsingle') -> name('blogsingle');

Route::post('/blog/buy/{id}', 'BlogController@blogbuy') -> name('blog.buy');

Route::get('/single/{slug}', 'BlogController@single') -> name('single');

Route::get('/home', 'HomeController@home')->name('home');


Auth::routes();


Route::group(['namespace' => 'Admin', 'prefix' => 'admin',  'middleware' => 'admin'], function() {

Route::get('admin', 'AdminController@admin')->name('admin.admin');

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

Route::get('/articles/list', 'AdminController@adminArticlesList')->name('admin.articles.list');
Route::get('/articles/edit/{id}', 'AdminController@adminArticlesEdit')->name('admin.articles.edit');
Route::post('/articles/save/{id?}', 'AdminController@adminArticlesSave')->name('admin.articles.save');
Route::get('/articles/delete/{id}', 'AdminController@adminArticlesDelete')->name('admin.articles.delete');
Route::get('/articles/create', 'AdminController@adminArticlesCreate')->name('admin.articles.create');

Route::get('/orders/list', 'AdminController@adminOrdersList')->name('admin.orders.list');
Route::get('/orders/edit/{id}', 'AdminController@adminOrdersEdit')->name('admin.orders.edit');
Route::post('/orders/save/{id?}', 'AdminController@adminOrdersSave')->name('admin.orders.save');
Route::get('/orders/delete/{id}', 'AdminController@adminOrdersDelete')->name('admin.orders.delete');
Route::get('/orders/create', 'AdminController@adminOrdersCreate')->name('admin.orders.create');

});

Route::get('/cart', 'CartController@cart') -> name('cart');
Route::post('/cart/add', 'CartController@add')->name('cart.add');
Route::post('/cart/remove', 'CartController@remove')->name('cart.remove');
Route::post('/cart/change', 'CartController@change')->name('cart.change');
Route::post('/cart/clear', 'CartController@clear')->name('cart.clear');
Route::get('/checkout', 'CartController@checkout') ->name('checkout');
Route::post('/checkout/buy', 'CartController@buy')->name('checkout.buy');

Route::get('/wishlist', 'WishlistController@wishlist') -> name('wishlist');
Route::post('/wishlist/add', 'WishlistController@add')->name('wishlist.add');
Route::post('/wishlist/remove', 'WishlistController@remove')->name('wishlist.remove');

Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact/buy', 'ContactController@buy')->name('contact.buy');
