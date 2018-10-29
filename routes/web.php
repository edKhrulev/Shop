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
Route::namespace('ShopAuth')->group(function () {
    Route::get('/registration', 'UserController@getRegistration')->name('getRegistration');
    Route::post('/registration', 'UserController@postRegistration')->name('postRegistration');
    Route::get('/login', 'UserController@getLogin')->name('getLogin');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');


    Route::group(['middleware' => ['checkAuth']], function () {

        Route::get('/', 'HomeController@getHome')->name('getHome');
        Route::get('/cart/{productId}', 'CartController@getCart')->name('getCart');
        Route::get('/order', 'CartController@getOrder')->name('getOrder');
        Route::get('/logout', 'UserController@getLogout')->name('getLogout');

        Route::get('/products/create', 'ProductController@getProduct')->name('getProduct');
        Route::post('/products/create', 'ProductController@postProduct')->name('postProduct');
    });
});





