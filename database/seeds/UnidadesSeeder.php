<?php

use App\Unidad;
use Illuminate\Database\Seeder;

class UnidadesSeeder extends Seeder {
    public function run() {
        $unidad = new Unidad();
	    $unidad->descripcion_sg = 'UNIDAD';
	    $unidad->acro_sg = 'und';
	    $unidad->descripcion_pl = 'UNIDADES';
	    $unidad->acro_pl = 'unds';
	    $unidad->save();

	    $unidad = new Unidad();
	    $unidad->descripcion_sg = 'BULTO';
	    $unidad->acro_sg = 'bto';
	    $unidad->descripcion_pl = 'BULTOS';
	    $unidad->acro_pl = 'btos';
	    $unidad->save();

	    $unidad = new Unidad();
	    $unidad->descripcion_sg = 'PAQUETE';
	    $unidad->acro_sg = 'pqt';
	    $unidad->descripcion_pl = 'PAQUETES';
	    $unidad->acro_pl = 'pqts';
	    $unidad->save();

	    $unidad = new Unidad();
	    $unidad->descripcion_sg = 'KILOGRAMO';
	    $unidad->acro_sg = 'kg';
	    $unidad->descripcion_pl = 'KILOGRAMOS';
	    $unidad->acro_pl = 'kgs';
	    $unidad->save();

	    $unidad = new Unidad();
	    $unidad->descripcion_sg = 'LITRO';
	    $unidad->acro_sg = 'lts';
	    $unidad->descripcion_pl = 'LITRO';
	    $unidad->acro_pl = 'lts';
	    $unidad->save();

	    $unidad = new Unidad();
	    $unidad->descripcion_sg = 'GALÓN';
	    $unidad->acro_sg = 'kg';
	    $unidad->descripcion_pl = 'GALÓN';
	    $unidad->acro_pl = 'kgs';
	    $unidad->save();

	    $unidad = new Unidad();
	    $unidad->descripcion_sg = 'CAJA';
	    $unidad->acro_sg = 'kg';
	    $unidad->descripcion_pl = 'CAJA';
	    $unidad->acro_pl = 'kgs';
	    $unidad->save();

	    $unidad = new Unidad();
	    $unidad->descripcion_sg = 'BOLSA';
	    $unidad->acro_sg = 'kg';
	    $unidad->descripcion_pl = 'BOLSA';
	    $unidad->acro_pl = 'kgs';
	    $unidad->save();

	    $unidad = new Unidad();
	    $unidad->descripcion_sg = 'COMBO';
	    $unidad->acro_sg = 'kg';
	    $unidad->descripcion_pl = 'COMBO';
	    $unidad->acro_pl = 'kgs';
	    $unidad->save();

	    $unidad = new Unidad();
	    $unidad->descripcion_sg = 'SACO';
	    $unidad->acro_sg = 'kg';
	    $unidad->descripcion_pl = 'SACO';
	    $unidad->acro_pl = 'kgs';
	    $unidad->save();

	    $unidad = new Unidad();
	    $unidad->descripcion_sg = 'TAMBOR';
	    $unidad->acro_sg = 'kg';
	    $unidad->descripcion_pl = 'TAMBOR';
	    $unidad->acro_pl = 'kgs';
	    $unidad->save();

	    $unidad = new Unidad();
	    $unidad->descripcion_sg = 'CUÑETE';
	    $unidad->acro_sg = 'kg';
	    $unidad->descripcion_pl = 'CUÑETE';
	    $unidad->acro_pl = 'kgs';
	    $unidad->save();
    }
}
