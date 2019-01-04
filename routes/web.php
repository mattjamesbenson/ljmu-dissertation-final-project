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

Route::resource('basket', 'BasketController');
Route::get('/', 'HomeController@index')->name('index');
Route::get('new-releases', 'ProductController@newReleases')->name('new-releases');
Route::get('mens', 'ProductController@mens')->name('mens');
Route::get('womens', 'ProductController@womens')->name('womens');
Route::get('children', 'ProductController@children')->name('children');
Route::get('sale', 'ProductController@sale')->name('sale');
