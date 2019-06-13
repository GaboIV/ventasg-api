<?php

use App\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder {
    public function run() {
        $producto = new Producto();
	    $producto->codigo = '123456789012';
	    $producto->codigoAlt = '010101010101';
	    $producto->descripcion = 'Artículo de prueba';
	    $producto->unidad_id = 2;
	    $producto->presentacion = '100';
	    $producto->marca_id = 1;
	    $producto->almacen_id = 1;
	    $producto->grupo_id = 1;
	    $producto->precio1 = 10500.50;
	    $producto->costo = 10000;
	    $producto->alicuota = 0;
	    $producto->save();

	    $producto = new Producto();
	    $producto->codigo = '70336';
	    $producto->descripcion = 'JAMÓN SERRANO';
	    $producto->unidad_id = 1;
	    $producto->presentacion = '1000';
	    $producto->marca_id = 2;
	    $producto->almacen_id = 2;
	    $producto->grupo_id = 8;
	    $producto->precio1 = 29866.82;
	    $producto->costo = 9821.43;
	    $producto->alicuota = 16;
	    $producto->save();
    }
}
