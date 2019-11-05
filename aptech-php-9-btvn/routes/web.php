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


Route::get('/','UserController@showText');
Route::get('kiemtra',function()
{
    return "OK";
});
Route::get('kiemtra/{ten}',function($ten){
    echo "xin chào bạn $ten";
});
Route::get('Route1',['as'=>'MyRoute',function(){
    echo "Xin chao cac ban";
}]);
Route::get('Route2',function(){
    echo "Đây là Route 2";
})->name('MyRoute2');
Route::get('goiten',function(){
    return redirect()->route('MyRoute2');
});