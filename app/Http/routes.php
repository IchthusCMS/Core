<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function() {
	Route::auth();
	Route::get('/', 'AdminController@index');
	Route::get('accounts', 'AdminController@accounts');
	Route::get('accounts/add', 'AdminController@getAddAccountPage');
	Route::post('accounts/add', 'AdminController@addAccount');
});