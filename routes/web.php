<?php

use Illuminate\Support\Facades\Request;

Route::get('imagenes/{location}/{filename}', function ($location, $filename) {
	$file = storage_path("app/public/$location/$filename");

	if (!file_exists($file)) 
		$file = storage_path("app/public/$location/image-not-found.jpg");

    $fileMime = mime_content_type($file);
	    return (new \Illuminate\Http\Response(file_get_contents($file), 200))->header('Content-Type', $fileMime);    
});
Route::post('imagenes','fileController@store');