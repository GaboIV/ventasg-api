<?php

use Illuminate\Http\Request;

Route::resource('productos', 'productoController', ['except' => ['create', 'edit']]);