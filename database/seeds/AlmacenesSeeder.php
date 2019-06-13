<?php

use App\Almacen;
use Illuminate\Database\Seeder;

class AlmacenesSeeder extends Seeder {
    public function run() {
        $almacen = new Almacen();
	    $almacen->descripcion = 'Almacén Principal';
	    $almacen->coordenadas = 'a1';
	    $almacen->save();
    }
}