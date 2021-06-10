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
Route::get('/you-not-enough-age', function () {
    return 'May chua du tuoi de xem 8p...';
})->name('you-not-enough-age');

Route::get('login', function () {
    return view('admin.login');
})->name('login');

Route::post('login', 'LoginController@authenticate')->name('authenticate');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::middleware(['auth', 'checkAge'])->group( function () {
    Route::namespace('Admin')->group( function () {
        Route::name('admin.')->group( function () {
            Route::name('product.')->group(function () {
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
});

#php artisan make:migration add_categories_id_to_products_table --table=products

#php artisan make:migration create_roles_table --create=roles
// id name, image

// relation ship
// authentication
// middleware
// migrate
// seed


// logic,




// request
// validation
// crud
// relation
//https://www.youtube.com/watch?v=wg3uNHOrBqA
//https://laravel.com/docs/6.x/eloquent-relationships
//https://anonystick.com/blog-developer/4-co-che-dang-nhap-bai-viet-nay-la-du-cho-dan-lap-trinh-phan-1-2020091071827696



