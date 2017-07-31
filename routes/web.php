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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'category'],function(){
        Route::get('list',['as'=>'admin.category.list','uses'=>'Admin\CategoryController@index']);
        Route::get('create',['as'=>'admin.category.create','uses'=>'Admin\CategoryController@create']);
        Route::post('store',['as'=>'admin.category.store','uses'=>'Admin\CategoryController@store']);
        Route::get('delete/{id}',['as'=>'admin.category.delete','uses'=>'Admin\CategoryController@destroy']);
        Route::get('edit/{id}',['as'=>'admin.category.edit','uses'=>'Admin\CategoryController@edit']);
        Route::post('update/{id}',['as'=>'admin.category.update','uses'=>'Admin\CategoryController@update']);
    });
});