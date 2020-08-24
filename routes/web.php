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

Route::get( '/', function () {
    return view( 'welcome' );
} );

Auth::routes();

Route::prefix( 'admin' )->name( 'admin.' )->namespace( 'Admin' )->group( function () {

    Route::middleware( 'auth' )->group( function () {

        Route::get( 'dashboard', 'AdminController@index' );

<<<<<<< HEAD
        Route::get('dashboard', 'AdminController@index');
  
        Route::resource('category','CategoryController');
=======
        Route::resource( 'category', 'CategoryController' );

        Route::resource( 'slug', 'SlugController' );
        Route::resource( 'product', 'ProductController' );
>>>>>>> 25a5125ead8ab201dd82c160dcf1b7ca7d4f0d91

    } );

} );