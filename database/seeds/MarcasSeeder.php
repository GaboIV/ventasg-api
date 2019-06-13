<?php

use App\Marca;
use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder {
    public function run() {
        $marca = new Marca();
	    $marca->descripcion = 'BIMBO';
	    $marca->image = 'marca_1_13_06_2019.jpg';
	    $marca->save();

	    $marca = new Marca();
	    $marca->descripcion = 'PLUMROSE';
	    $marca->image = 'marca_2_13_06_2019.jpg';
	    $marca->save();
    }
}