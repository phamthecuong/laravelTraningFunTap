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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/userLogin', 'User\LoginController');
Route::resource('/userRegister', 'User\RegisterController');

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {
    Route::resource('/category', 'category\CategoryController');
    Route::resource('/product', 'product\ProductController');
    Route::resource('/profile', 'User\ProfileController');

    Route::get('/category/delete/{id}', 'category\CategoryController@destroy');
    Route::get('/product/delete/{id}', 'product\ProductController@destroy');
    Route::get('/logout', 'User\LoginController@logout');
});

Route::group(['prefix' => 'ajax',  'middleware' => 'auth'], function() {
    Route::resource('/category', 'Ajax\CategoryController');
    Route::resource('/product', 'Ajax\ProductController');
});


