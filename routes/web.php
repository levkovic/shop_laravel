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
Route::get('/add-to-cart/{$id}', ['uses' => 'ProductsController@getAddToCart]',
	'as' => 'product.addToCart']);

Route::get('/',['as' => 'home', 'uses' => 'SiteController@getIndex']);

Route::resource('product', 'ProductsController');
Route::resource('category', 'CategoryController');