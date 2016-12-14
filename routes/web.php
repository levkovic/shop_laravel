<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('add-to-cart/{id}', [
	'as' => 'addToCart',
	'uses' => 'ProductsController@getAddToCart'
	]);

Route::get('shopping-cart', [
	'as' => 'product.shoppingCart',
	'uses' => 'ProductsController@getCart'
	]);

Route::get('/',['as' => 'home', 'uses' => 'SiteController@getIndex']);

Route::resource('product', 'ProductsController');
Route::resource('category', 'CategoryController');