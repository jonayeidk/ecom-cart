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

Route::get( '/', 'HomeController@index' );

Route::get( '/home', function () {
    return redirect( '/admin/dashboard' );
} );

Route::get( '/add-to-cart/{id}', 'CartController@addToCart' )->name( 'add-to-cart' );
Route::post( '/remove-to-cart', 'CartController@removeToCart' )->name( 'remove-to-cart' );
Route::get( '/view-cart', 'CartController@viewCart' )->name( 'view-cart' );
Route::get( '/checkout', 'CartController@checkOutPage' )->name( 'checkout' );
Route::post( '/add-to-cart-js', 'CartController@addToCart' )->name( 'add-to-cart-js' );
Route::post( '/update-to-cart', 'CartController@updateToCart' )->name( 'update-to-cart' );

// Place order

Route::post('/place-order','OrderController@place_order')->name('place-order');

Route::get('/success',function(){
    return view('fontend.success');
})->name('success');

// User login 

Route::post('/user-login','UserController@user_login')->name('user-login');


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