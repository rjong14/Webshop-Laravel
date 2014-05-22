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

Route::get('home', 'IndexController@getIndex');
Route::get('login', 'LoginController@getIndex');
Route::get('about', 'AboutController@getIndex');
Route::get('takenverdeling', 'TaskController@getIndex');
Route::controller('login', 'LoginController');
Route::controller('signup', 'SignupController');
Route::controller('search', 'SearchController');
Route::controller('cart', 'CartController');
Route::controller('checkout', 'CheckoutController');

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

//Route::group(array('prefix' => 'producten'), function()
//{
	Route::controller('producten', 'FProductController');

//});
