<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileRequest;
use Illuminate\Http\Request;

class fileController extends Controller
{
    public function store(FileRequest $request)	{
    	$id = $request->id;
	    if($request->hasfile('imagen')) {
	    	$imagen = $request->imagen;
	        $nombreImagen = $id.'.png';
	        $imagen->move(storage_path().'/app/public/productos/', $nombreImagen);   
         }

        $data = array(
            'status' => 'success',
            'code' => 200,
            'imagen' => $nombreImagen
        ); 

        return $data;
	}
}
