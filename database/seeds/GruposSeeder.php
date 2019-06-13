<?php

use App\Grupo;
use Illuminate\Database\Seeder;

class GruposSeeder extends Seeder {
    public function run() {
        $grupo = new Grupo();
	    $grupo->descripcion = 'SUPERMERCADO';
	    $grupo->touch = 0;
	    $grupo->ordertouch = 0;
	    $grupo->color = '#F44336';
	    $grupo->save();

	    $grupo = new Grupo();
	    $grupo->descripcion = 'LICORES';
	    $grupo->touch = 0;
	    $grupo->ordertouch = 0;
	    $grupo->color = '#E91E63';
	    $grupo->save();

	    $grupo = new Grupo();
	    $grupo->descripcion = 'PLATOS';
	    $grupo->touch = 0;
	    $grupo->ordertouch = 0;
	    $grupo->color = '#9C27B0';
	    $grupo->save();

	    $grupo = new Grupo();
	    $grupo->descripcion = 'CAFÉ Y ESPECIALIDADES';
	    $grupo->touch = 1;
	    $grupo->ordertouch = 0;
	    $grupo->color = '#673AB7';
	    $grupo->save();

	    $grupo = new Grupo();
	    $grupo->descripcion = 'PIZZAS Y EXTRAS';
	    $grupo->touch = 1;
	    $grupo->ordertouch = 0;
	    $grupo->color = '#FF9800';
	    $grupo->save();

	    $grupo = new Grupo();
	    $grupo->descripcion = 'SANDWICHES Y HAMBURGUESAS';
	    $grupo->touch = 1;
	    $grupo->ordertouch = 0;
	    $grupo->color = '#2196F3';
	    $grupo->save();

	    $grupo = new Grupo();
	    $grupo->descripcion = 'POSTRES';
	    $grupo->touch = 1;
	    $grupo->ordertouch = 0;
	    $grupo->color = '#CDDC39';
	    $grupo->save();

	    $grupo = new Grupo();
	    $grupo->descripcion = 'CONSUMIBLES';
	    $grupo->touch = 0;
	    $grupo->ordertouch = 0;
	    $grupo->color = '#00BCD4';
	    $grupo->save();

	    $grupo = new Grupo();
	    $grupo->descripcion = 'CHARCUTERÍA';
	    $grupo->touch = 0;
	    $grupo->ordertouch = 0;
	    $grupo->color = '#009688';
	    $grupo->save();

	    $grupo = new Grupo();
	    $grupo->descripcion = 'CARNICERÍA';
	    $grupo->touch = 0;
	    $grupo->ordertouch = 0;
	    $grupo->color = '#4CAF50';
	    $grupo->save();

	    $grupo = new Grupo();
	    $grupo->descripcion = 'DESAYUNOS';
	    $grupo->touch = 0;
	    $grupo->ordertouch = 0;
	    $grupo->color = '#454545';
	    $grupo->save();
    }
}
