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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/create','PostController@create')->name('post.create');
Route::post('/create','PostController@store')->name('post.store');
Route::get('/edit/{id}','PostController@edit')->name('post.edit');
Route::post('/edit/{id}','PostController@update')->name('post.update');
Route::get('/destroy/{id}','PostController@destroy')->name('post.destroy');
Route::get('/','PostController@index')->name('post.index');
Route::get('/{id}/show','PostController@show')->name('post.show');
Route::get('/list', 'PostController@list')->name('post.list');

