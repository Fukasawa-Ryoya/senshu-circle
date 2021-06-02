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


Route::GET('/','CircleController@show');

Route::GET('/circle/{id}','CircleController@showDetail');

Route::GET('/category/{category}','CircleController@showCategory');
Route::GE('/{type}','CircleController@showType');

Route::POST('/result','CircleController@search');
