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
Route::get('delete-from-cart/{id}', [
	'as' => 'deleteFromCart',
	'uses' => 'ProductsController@getDeleteFromCart'
	]);

Route::get('remove-from-cart/{id}', [
	'as' => 'removeFromCart',
	'uses' => 'ProductsController@getRemoveFromCart'
	]);

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