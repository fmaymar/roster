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

/* RUTAS PÚBLICAS*/
Route::get('/', 'WelcomeController@index');

Route::get('home', array('as'=>'home','uses'=>'HomeController@index'));

/* RUTAS DE AUTENTICACIÓN */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/* RUTAS DE USUARIO*/
Route::group(['prefix'=>'profile','middleware'=>['auth'], 'namespace'=>'Profile'], function(){

	Route::resource('/','ProfileController');
});

/*RUTAS DE ADMINISTRADOR*/
Route::group(['prefix'=>'admin','middleware'=>['auth','is_admin'], 'namespace'=>'Admin'], function(){

	Route::get('/',array('as'=>'admin','uses'=>'AdminController@index'));
	Route::resource('squadrons','SquadronsController');
	Route::resource('users','UsersController');


});
