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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/users', 'UserController@index');
// Route::get('/users/create', 'UserController@create');
// Route::get('/users/{id}', 'UserController@show');
// Route::delete('/show/{id}', 'UserController@destroy');
// Route::post('/users', 'UserController@store');
Route::get('/show','UserController@index')->name('users.index');
Route::get('/show/create', 'UserController@create');
Route::get('/show/{id}','UserController@show1user');
Route::delete('/show/{id}', 'UserController@destroy')->name('users.destroy');
Route::post('/show', 'UserController@store')->name('user-store');
Route::get('show/{id}/edit','UserController@edit')->name('users.edit');
 Route::put('show/{id}','UserController@update')->name('users.update');