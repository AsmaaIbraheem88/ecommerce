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

Route::get('test','Admin\FirstController@show')->middleware('auth');

Route::group(['prefix'=>'admin', 'middleware' =>'admin', 'namespace' =>'Admin'],function () {
});

Route::resource('news','Admin\FirstController');
//Route::get('news','Admin\FirstController@index');
//Route::get('news/create','Admin\FirstController@create');
//Route::post('news','Admin\FirstController@store');
//Route::get('news/{id}/edit','Admin\FirstController@edit');
//Route::post('news/{id}','Admin\FirstController@update');
//Route::get('news/{id}','Admin\FirstController@show');
//Route::delete('news/{id}','Admin\FirstController@delete');

