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
    return view('page');
});

Route::name('product.')->group( function () {
    Route::prefix('product')->group(function () {
        // lay tat ca san pham
        Route::get('/index', 'ProductController@index')->name('index');
        // lay ra mot san pham
        Route::get('/detail/{id}', 'ProductController@detail')->name('detail');
        // cap nhat mot san pham
        Route::put('/update/{id}', 'ProductController@update');
        // hien thi form create san pham
        Route::get('/create', 'ProductController@create');
        // them mot san pham
        Route::post('/store', 'ProductController@store');
        // xoa san pham
        Route::get('/delete/{id}', 'ProductController@delete');
    });

});
