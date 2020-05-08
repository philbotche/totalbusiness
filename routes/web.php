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

// Home page Controller
Route::get('/', 'FrontController@index');
Route::get('/category/{slug}', 'FrontController@category')->name('cat');
Route::get('/product/single/{sku}', 'FrontController@single_product')->name('single_product');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

