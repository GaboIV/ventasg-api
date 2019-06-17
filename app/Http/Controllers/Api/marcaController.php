<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Functions;
use App\Http\Controllers\ApiController;
use App\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class marcaController extends ApiController {
    public function index() {
        $modeloMarca = new Marca();        

        if (request()->has('orden')) {
            $attribute = request()->orden; 
            $nombreCols = \Schema::hasColumn($modeloMarca->getTable(), $attribute);
            if ( !$nombreCols ) $attribute = 'descripcion';
        } else {
            $attribute = 'descripcion';
        }

        $marcas = Marca::orderBy($attribute)
                        ->paginate(30);

        $data = array(
            'orden' => $attribute,
            'data' => $marcas
        ); 

        return $this->successResponse($data, 200);
    }
  
    public function store(Request $request) {
        $data = $request->all();    
        if ($request->image && $request->image != null && $request->image != "") {
            $data['image'] = Functions::storeFile($request->image, 'jpg', 'marcas');
        }    
        $marca = Marca::create($data);
        return $this->successResponse($marca, 201);
    }

    public function show($id) {
        $marca = Marca::find($id);

        if (is_object($marca)) {
            return $this->successResponse($marca, 200);
        } else {
            return $this->errorResponse('La marca que intenta ver no existe', 400);
        }
    }

    public function update(Request $request, $id) {
        $marca = Marca::find($id);
        
        if ($marca != null) {
            $marca->update($request->all());
            return $this->successResponse($marca, 200);
        }

        return $this->errorResponse('La marca que intenta actualizar no existe', 400);
    }

    public function destroy($id) {
        $marca = Marca::where('id', $id)->first();

        if ($marca != null) {
            $marca->delete();
            return $this->successResponse($marca, 200); 
        }

        return $this->errorResponse('La marca que intenta eliminar no existe', 400);
    }
}
