<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model {
    protected $table = 'unidades';

    protected $fillable = [
        'descripcion_sg', 
        'acro_sg', 
        'descripcion_pl',
        'acro_pl'
    ];
}
