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
Route::resource('order', 'OrderController');

Route::get('/experiment-1', 'HomeController@index')->name('experiment-1');
Route::get('/experiment-2', 'HomeController@index2')->name('experiment-2');
Route::get('home', 'HomeController@show')->name('home-show');
Route::get('home-second', 'HomeController@second')->name('home-second');

Route::get('top-picks/{product}', 'ProductController@show')->name('top-picks-show');

Route::get('new-releases', 'ProductController@newReleases')->name('new-releases');
Route::get('new-releases/{product}', 'ProductController@show')->name('new-releases-show');

Route::get('mens', 'ProductController@mens')->name('mens');
Route::get('mens/{product}', 'ProductController@show')->name('mens-show');

Route::get('womens', 'ProductController@womens')->name('womens');
Route::get('womens/{product}', 'ProductController@show')->name('womens-show');

Route::get('children', 'ProductController@children')->name('children');
Route::get('children/{product}', 'ProductController@show')->name('children-show');

Route::get('sale', 'ProductController@sale')->name('sale');
Route::get('sale/{product}', 'ProductController@show')->name('sale-show');
