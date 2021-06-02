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


Route::get('/','CircleController@show');

Route::get('/circle/{id}','CircleController@showDetail');

Route::get('/category/{category}','CircleController@showCategory');
Route::get('/{type}','CircleController@showType');

Route::post('/result','CircleController@search');
