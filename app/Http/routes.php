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

//Ruta Predeterminada de Public
Route::get('/', function () {
    return view('welcome');
});

//Test routes...
Route::get('ikihean', function () {
    return view('ikihean');
});

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

// Authentication routes...
Route::get('acceder', [
    'as' => 'acceder',
    'uses' => 'Auth\AuthController@getLogin']);

Route::post('acceder', [
    'as' => 'acceder',
    'uses' => 'Auth\AuthController@postLogin']);

Route::get('salir', [
    'as' => 'salir',
    'uses' => 'Auth\AuthController@getLogout']);

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postCedula');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Show Admin only routes...
Route::group(['prefix' => 'admin'], function(){  
    Route::resource('usuarios', 'AdminController@index');
    
    // Registration user routes...
    Route::get('registrar/usuario', [
        'as' => 'registrar',
        'uses' => 'Auth\AuthController@getRegister']);

    Route::post('registrar/usuario', [
        'as' => 'registrar',
        'uses' => 'Auth\AuthController@postRegister']);
});

/*Route::get('ikihean', function () {
    return view('ikihean');
});*/