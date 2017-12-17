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

Route::get('/', [
    'uses'=> 'PagesController@init',
    'as' => 'product.index'
]);

Route::get('home', 'PagesController@init');

Route::get('404', 'PagesController@notFound');

Route::get('contact', 'PagesController@contact');

Route::get('/shopping-cart', [
    'uses'=>'ProductController@getCart',
    'as' =>'product.shoppingCart'
]);

Route::get('checkout', 'PagesController@checkout');

Route::get('admin', 'AdminController@index');

Auth::routes(); //Routes : login + register

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-to-cart/{id}',[
   'uses'=> 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);
