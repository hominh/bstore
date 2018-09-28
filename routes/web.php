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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware' => ['auth', 'role:admin']],function(){
    Route::group(['prefix'=>'category'],function(){
        Route::get('list',['as'=>'admin.category.list','uses'=>'Admin\CategoryController@index']);
        Route::get('create',['as'=>'admin.category.create','uses'=>'Admin\CategoryController@create']);
        Route::post('store',['as'=>'admin.category.store','uses'=>'Admin\CategoryController@store']);
        Route::get('delete/{id}',['as'=>'admin.category.delete','uses'=>'Admin\CategoryController@destroy']);
        Route::get('edit/{id}',['as'=>'admin.category.edit','uses'=>'Admin\CategoryController@edit']);
        Route::post('update/{id}',['as'=>'admin.category.update','uses'=>'Admin\CategoryController@update']);
    });

    Route::group(['prefix'=>'supplier'],function(){
        Route::get('list',['as'=>'admin.supplier.list','uses'=>'Admin\SupplierController@index']);
        Route::get('create',['as'=>'admin.supplier.create','uses'=>'Admin\SupplierController@create']);
        Route::post('store',['as'=>'admin.supplier.store','uses'=>'Admin\SupplierController@store']);
        Route::get('delete/{id}',['as'=>'admin.supplier.delete','uses'=>'Admin\SupplierController@destroy']);
        Route::get('edit/{id}',['as'=>'admin.supplier.edit','uses'=>'Admin\SupplierController@edit']);
        Route::post('update/{id}',['as'=>'admin.supplier.update','uses'=>'Admin\SupplierController@update']);
    });

    Route::group(['prefix'=>'slide'],function(){
        Route::get('list',['as'=>'admin.slide.list','uses'=>'Admin\SlideController@index']);
        Route::get('create',['as'=>'admin.slide.create','uses'=>'Admin\SlideController@create']);
        Route::post('store',['as'=>'admin.slide.store','uses'=>'Admin\SlideController@store']);
        Route::get('delete/{id}',['as'=>'admin.slide.delete','uses'=>'Admin\SlideController@destroy']);
        Route::get('edit/{id}',['as'=>'admin.slide.edit','uses'=>'Admin\SlideController@edit']);
        Route::post('update/{id}',['as'=>'admin.slide.update','uses'=>'Admin\SlideController@update']);
        Route::get('delImg/{id}',['as'=>'admin.slide.delImg','uses'=>'Admin\SlideController@getDelImg']);
    });

    Route::group(['prefix'=>'service'],function(){
        Route::get('list',['as'=>'admin.service.list','uses'=>'Admin\ServiceController@index']);
        Route::get('create',['as'=>'admin.service.create','uses'=>'Admin\ServiceController@create']);
        Route::post('store',['as'=>'admin.service.store','uses'=>'Admin\ServiceController@store']);
        Route::get('delete/{id}',['as'=>'admin.service.delete','uses'=>'Admin\ServiceController@destroy']);
        Route::get('edit/{id}',['as'=>'admin.service.edit','uses'=>'Admin\ServiceController@edit']);
        Route::post('update/{id}',['as'=>'admin.service.update','uses'=>'Admin\ServiceController@update']);
        Route::get('delImg/{id}',['as'=>'admin.service.delImg','uses'=>'Admin\ServiceController@getDelImg']);
    });

    Route::group(['prefix'=>'brand'],function(){
        Route::get('list',['as'=>'admin.brand.list','uses'=>'Admin\BrandController@index']);
        Route::get('create',['as'=>'admin.brand.create','uses'=>'Admin\BrandController@create']);
        Route::post('store',['as'=>'admin.brand.store','uses'=>'Admin\BrandController@store']);
        Route::get('delete/{id}',['as'=>'admin.brand.delete','uses'=>'Admin\BrandController@destroy']);
        Route::get('edit/{id}',['as'=>'admin.brand.edit','uses'=>'Admin\BrandController@edit']);
        Route::post('update/{id}',['as'=>'admin.brand.update','uses'=>'Admin\BrandController@update']);
        Route::get('delImg/{id}',['as'=>'admin.brand.delImg','uses'=>'Admin\BrandController@getDelImg']);
    });

    Route::group(['prefix'=>'posttype'],function(){
        Route::get('list',['as'=>'admin.posttype.list','uses'=>'Admin\PosttypeController@index']);
        Route::get('create',['as'=>'admin.posttype.create','uses'=>'Admin\PosttypeController@create']);
        Route::post('store',['as'=>'admin.posttype.store','uses'=>'Admin\PosttypeController@store']);
        Route::get('delete/{id}',['as'=>'admin.posttype.delete','uses'=>'Admin\PosttypeController@destroy']);
        Route::get('edit/{id}',['as'=>'admin.posttype.edit','uses'=>'Admin\PosttypeController@edit']);
        Route::post('update/{id}',['as'=>'admin.posttype.update','uses'=>'Admin\PosttypeController@update']);
    });

    Route::group(['prefix'=>'post'],function(){
        Route::get('list',['as'=>'admin.post.list','uses'=>'Admin\PostController@index','middleware' => ['permission:create-newpost']]);
        Route::get('create',['as'=>'admin.post.create','uses'=>'Admin\PostController@create']);
        Route::post('store',['as'=>'admin.post.store','uses'=>'Admin\PostController@store']);
        Route::get('delete/{id}',['as'=>'admin.post.delete','uses'=>'Admin\PostController@destroy']);
        Route::get('edit/{id}',['as'=>'admin.post.edit','uses'=>'Admin\PostController@edit']);
        Route::post('update/{id}',['as'=>'admin.post.update','uses'=>'Admin\PostController@update']);
        Route::get('delImg/{id}',['as'=>'admin.post.delImg','uses'=>'Admin\PostController@getDelImg']);
    });
});
