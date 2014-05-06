<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'IndexController@getIndex');


Route::group(array('prefix' => 'admin'), function()
{
	Route::get('/', 'DashboardController@getIndex');
	Route::get('/products', 'ProductController@getIndex');
	Route::get('/users', 'UserController@getIndex');
	Route::get('/categories', 'CategorieController@getIndex');
	Route::get('/orders', 'OrderController@getIndex');
	Route::get('/menus', 'MenuController@getIndex');

	Route::controller('/users', 'UserController');
	Route::controller('/products', 'ProductController');
	Route::controller('/categories', 'CategorieController');
	Route::controller('/orders', 'OrderController');
	Route::controller('/menus', 'MenuController');
});