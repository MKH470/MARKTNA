<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Loader\Configurator\Traits\PrefixTrait;

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

Auth::routes();
Route::get('/', 'FrontPeoductsListController@index');

Route::get('/products-list', 'FrontPeoductsListController@showAllProducts')->name('products.list');
Route::get('/show/{id}', 'FrontPeoductsListController@show')->name('product.view');
Route::get('/category/{name}', 'FrontPeoductsListController@showCategoryWithProduct')->name('category.product.view');
Route::get('/addToCart/{product}', 'CartController@addToCart')->name('add.cart');
Route::get('/cart', 'CartController@showCart')->name('cart.show');
Route::post('/products/{product}', 'CartController@updateCart')->name('update.cart');
Route::post('/product/{product}', 'CartController@removeCart')->name('cart.remove');
Route::get('/checkout/{amount}', 'CartController@checkout')->name('cart.checkout')->middleware('auth');
Route::get('/orders', 'CartController@order')->name('order')->middleware('auth');
Route::post('/charge', 'CartController@charge')->name('cart.charge');


Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth', 'isAdmin')->prefix('manager')->group(function () {
    Route::get('/dashboard', 'BackendController@dashboard')->name('dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('subcategory', 'SubcategoryController');
    Route::resource('product', 'ProductController');
    Route::get('subcategories/{id}', 'ProductController@loadSubCategories');
    Route::get('/slider/create', 'SliderController@create')->name('slider.create');
    Route::post('/slider', 'SliderController@store')->name('slider.store');
    Route::get('/slider', 'SliderController@index')->name('slider.index');
    Route::delete('/slider/{id}', 'SliderController@destroy')->name('slider.destroy');
    Route::get('/users', 'UserController@index')->name('user.index');
    Route::get('/orders', 'CartController@userOrder')->name('user.order');
    Route::get('/order/view/{userid}/{orderid}', 'CartController@userOrderView')->name('order.view');
});
