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
Route::get('/show','ArticleController@show')->name('article.show');
Route::get('/show/create', 'ArticleController@create');
Route::get('/show/{id}','ArticleController@show1article');
Route::delete('/show/{id}', 'ArticleController@destroy')->name('article.destroy');
Route::post('/show', 'ArticleController@store')->name('article-store');
Route::get('show/{id}/edit','ArticleController@edit')->name('article.edit');
Route::put('show/{id}','ArticleController@update')->name('article.update');

Route::get('showCat','CategoryController@showCat')->name('category.show');
Route::get('/showCat/createCat', 'CategoryController@create');
Route::delete('showCat/{id}', 'CategoryController@destroy')->name('category.destroy');
Route::post('/showCat', 'CategoryController@store')->name('category.store');
Route::get('showCat/{id}/edit','CategoryController@edit')->name('category.edit');
Route::put('showCat/{id}','CategoryController@update')->name('category.update');
