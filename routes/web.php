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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page');
});

Route::namespace('Admin')->group( function () {
    Route::name('admin.')->group( function () {
        Route::name('product.')->group( function () {
            Route::prefix('product')->group(function () {
                // lay tat ca san pham
                Route::get('/index', 'ProductController@index')->name('index');
                // lay ra mot san pham
                Route::get('/detail/{id}', 'ProductController@detail')->name('detail');
                // cap nhat mot san pham
                Route::put('/update/{id}', 'ProductController@update')->name('update');
                // hien thi form create san pham
                Route::get('/create', 'ProductController@create')->name('add');
                // them mot san pham
                Route::post('/store', 'ProductController@store')->name('store');
                // xoa san pham
                Route::get('/delete/{id}', 'ProductController@delete')->name('delete');
            });
        });

        //USER
        Route::name('user.')->group( function () {
            Route::prefix('product')->group(function () {
                // lay tat ca san pham
                Route::get('/index', 'ProductController@index')->name('index');
                // lay ra mot san pham
                Route::get('/detail/{id}', 'ProductController@detail')->name('detail');
                // cap nhat mot san pham
                Route::put('/update/{id}', 'ProductController@update')->name('update');
                // hien thi form create san pham
                Route::get('/create', 'ProductController@create')->name('add');
                // them mot san pham
                Route::post('/store', 'ProductController@store')->name('store');
                // xoa san pham
                Route::get('/delete/{id}', 'ProductController@delete')->name('delete');
            });
        });
    });
});

// request
// validation
// crud
// relation
//https://www.youtube.com/watch?v=wg3uNHOrBqA
//https://laravel.com/docs/6.x/eloquent-relationships
//https://anonystick.com/blog-developer/4-co-che-dang-nhap-bai-viet-nay-la-du-cho-dan-lap-trinh-phan-1-2020091071827696
// authentication
// middleware


