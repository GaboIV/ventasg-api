<?php

namespace App\Http\Controllers\Api;

use App\Almacen;
use App\Http\Controllers\ApiController;
use App\Http\Requests\AlmacenesRequest;
use Illuminate\Http\Request;

class almacenController extends ApiController {
    public function index() {
        $modeloAlmacen = new Almacen();

        if (request()->has('orden')) {
            $attribute = request()->orden; 
            $nombreCols = \Schema::hasColumn($modeloAlmacen->getTable(), $attribute);
            if ( !$nombreCols ) $attribute = 'descripcion';
        } else {
            $attribute = 'descripcion';
        }

        $almacenes = Almacen::orderBy($attribute)
                        ->paginate(30);

        $data = array(
            'orden' => $attribute,
            'data' => $almacenes
        ); 

        return $this->successResponse($data, 200);
    }
  
    public function store(AlmacenesRequest $request) {
        $data = $request->all();
        $almacen = Almacen::create($data);        
        return $this->successResponse($almacen, 201);
    }

    public function show($id) {
        $almacen = Almacen::find($id);

        if (is_object($almacen)) {
            return $this->successResponse($almacen, 200);
        } else {
            return $this->errorResponse('El almacén que intenta ver no existe', 400);
        }
    }

    public function update(Request $request, $id) {
        $almacen = Almacen::find($id);
        
        if ($almacen != null) {
            $almacen->update($request->all());
            return $this->successResponse($almacen, 200);
        }

        return $this->errorResponse('El almacén que intenta actualizar no existe', 400); 
    }

    public function destroy($id) {
        $almacen = Almacen::where('id', $id)->first();

        if ($almacen != null) {
            $almacen->delete();
            return $this->successResponse($almacen, 200);
        }

        return $this->errorResponse('El almacén que intenta eliminar no existe', 400);
    }
}
