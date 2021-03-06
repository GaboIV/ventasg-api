<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Functions;
use App\Http\Controllers\ApiController;
use App\Http\Requests\ProductoRequest;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class productoController extends ApiController {
   
    public function index() {
        $modeloProducto = new Producto();        

        if (request()->has('orden')) {
            $attribute = request()->orden; 
            $nombreCols = \Schema::hasColumn($modeloProducto->getTable(), $attribute);
            if ( !$nombreCols ) $attribute = 'descripcion';
        } else {
            $attribute = 'descripcion';
        }

        $productos = Producto::orderBy($attribute)
                        ->paginate(30);

        $data = array(
            'orden' => $attribute,
            'data' => $productos
        ); 

        return $this->successResponse($data, 200);
    }

    public function store(ProductoRequest $request) {
        $data = $request->all();
        $imagen = $request->imagen;
        $data['imagen'] = '';

        $producto = Producto::create($data);

        if ($imagen && $imagen != null && $imagen != "") {
            $name = $producto->id . '.png';
            \Image::make($request->imagen)->save(storage_path('app/public/productos/').$name);
            $producto['imagen'] = $name;
        }
        
        return $this->successResponse($producto, 201);    
    }

    public function show($id) {
        $producto = Producto::find($id);
        $producto->productoscomanda;

        if (is_object($producto)) {
            return $this->successResponse($producto, 200);
        } else {
            return $this->errorResponse('El producto que intenta ver no existe', 400);
        }
    }

    public function update(Request $request, $id) {
        $producto = Producto::find($id);
        
        if ($producto != null) {
            $producto->update($request->all());
            if (isset($request->productoscomanda['created_at']) || $request->productoscomanda['status'] != 0) {
                $producto->productosComanda()->updateOrCreate(['producto_id' => $id],$request->productoscomanda);
                $producto->load('productoscomanda');
            }

            if (isset($request->productocaja['created_at']) || $request->productocaja['status'] != 0) {
                $producto->productoCaja()->updateOrCreate(['producto_id' => $id],$request->productocaja);            
                $producto->load('productocaja');
            }
            
            return $this->successResponse($producto, 200);
        }

        return $this->errorResponse('El producto que intenta actualizar no existe', 400); 
    }

    public function destroy($id) {
        $producto = Producto::where('id', $id)->first();

        if ($producto != null) {
            $producto->delete();
            return $this->successResponse($producto, 200); 
        }

        return $this->errorResponse('El producto que intenta eliminar no existe', 400);
    }

    public function search(Request $request) {
        $dato = $request->dato;

        $productos = Producto::where('codigo', 'LIKE',  '%' . $dato . '%')
                            ->orWhere('descripcion', 'LIKE',  '%' . $dato . '%')
                            ->get();
        return $productos;
    }
}
