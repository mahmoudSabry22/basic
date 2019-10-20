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

Route::get('/', 'Home\HomeController@index');
Route::get('/welcome', 'Home\HomeController@index2');

Route::group(['namespace' => 'User', 'prefix' => 'users'], function(){
    Route::get('/', 'UserController@index')->name('users.index');
Route::get('/create', 'UserController@create')->name('users.create');
Route::post('/store', 'UserController@store')->name('users.store');
Route::get('/{user}/edit', 'UserController@edit')->name('users.edit');
Route::patch('/update/{user}', 'UserController@update')->name('users.update');
Route::get('/show/{user}', 'UserController@show')->name('users.show');

});


