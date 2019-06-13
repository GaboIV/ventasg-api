<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', 'Auth\LoginController@login');
});

Route::resource('productos', 'productoController', ['except' => ['create', 'edit']]);