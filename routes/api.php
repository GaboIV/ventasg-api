<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', 'Auth\LoginController@login');
});

Route::group(['namespace' => 'Api', 'middleware' => 'auth:api'], function () {
	Route::resource('productos', 'productoController', ['except' => ['create', 'edit']]);
	Route::resource('marcas', 'marcaController', ['except' => ['create', 'edit']]);
	Route::resource('grupos', 'grupoController', ['except' => ['create', 'edit']]);
	Route::resource('almacenes', 'almacenController', ['except' => ['create', 'edit']]);
});

Route::post('file', 'imagenesController@store');