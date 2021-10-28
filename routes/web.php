<?php
use  Illuminate\Auth\Middleware\AdminMiddleware;
use  Illuminate\Auth\Middleware\CustomerMiddleware;
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

// =============================== Font End =============================================//
Route::group(['middleware' => ['CustomerMiddleware']], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/home.html', 'HomeController@index');
    Route::get('/contact.html', 'HomeController@contact');
    Route::get('/introduce.html', 'HomeController@introduce');
    Route::get('/detail-product/{id}.html', 'ProductController@detail_product');
    Route::get('/watch-man.html', 'ProductController@watch');
    Route::get('/searchProduct.html', 'ProductController@searchProduct');
});
// Home

Route::post('/load-more-product','ProductController@loadMore');



Route::post('/watchAjax','ProductController@watchAjax');
Route::post('/searchAjax','ProductController@searchAjax');

// Login , Logout, register
Route::get('/login.html', 'LoginController@login');
Route::get('/register.html', 'LoginController@register');
Route::get('/logout.html', 'LoginController@logout');
Route::post('/register.html','LoginController@executedRegister');
Route::post('/login.html','LoginController@executeLogin');

Route::post('/ajaxCheckEmailExit', 'LoginController@ajaxCheckEmailExit');
// =============================== Back-end =============================================//
// Admin 
// Route::get('/admin', 'AdminController@index')->middleware('AdminMiddleware');
Route::get('/dashboard', 'AdminController@index');
Route::get('/admin', 'AdminController@index');
// Product
Route::get('/home-add-product', 'ProductController@home');
Route::get('/edit-product/{id_product}', 'ProductController@edit');
Route::post('/update-product/{id_product}', 'ProductController@update');
Route::get('/all-product', 'ProductController@show_all');
Route::post('/save-product/{id_product}', 'ProductController@save');
Route::get('/delete-product/{id_product}', 'ProductController@delete');

// Brand
Route::get('/home-add-brand','BrandController@home');
Route::post('/save-brand','BrandController@save');
Route::get('/all-brand','BrandController@show_all');
Route::get('/delete-brand/{id}','BrandController@delete');
Route::get('/edit-brand/{id}','BrandController@edit');
Route::post('/update-brand/{id}','BrandController@update');
Route::get('/un-active-brand/{id}','BrandController@unactive');
Route::get('/active-brand/{id}','BrandController@active');


// Product ============================== 
Route::resource('products', 'ProductController');
Route::get('/un-active-product/{id}','ProductController@unactive');
Route::get('/active-product/{id}','ProductController@active');
Route::get('/active-highlight/{id}','ProductController@active_highlight');
Route::get('/un-active-highlight/{id}','ProductController@un_active_highlight');
