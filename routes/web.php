<?php

use Illuminate\Support\Facades\Route;

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


// fontend routes

Route::get( '/', 'HomeController@index');

Route::get('/home',function(){
    return redirect('/admin/dashboard');
});


Route::get('/add-to-cart/{id}','CartController@addToCart')->name('add-to-cart');
Route::get('/remove-to-cart/{id}','CartController@removeToCart')->name('remove-to-cart');


Route::post('/add-to-cart-js','CartController@addToCart')->name('add-to-cart-js');

// backend routes

 
Auth::routes();



Route::prefix( 'admin' )->name( 'admin.' )->namespace( 'Admin' )->group( function () {

    Route::middleware( 'auth' )->group( function () {

        Route::get( 'dashboard', 'AdminController@index' );

        Route::resource( 'category', 'CategoryController' );

        Route::resource( 'slug', 'SlugController' );

        Route::resource( 'product', 'ProductController' );

    } );

} );