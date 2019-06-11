<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use Notifiable;

    protected $table = 'productos';

    protected $fillable = [
        'codigo', 
        'codigoAlt', 
        'descripcion',
        'id_unidad',
        'presentacion',
        'id_marca',
        'id_almacen',
        'id_grupo',
        'id_subgrupo',
        'precio1',
        'precio2',
        'precio3',
        'costo',
        'alicuota',
        'v_comanda',
        'v_caja', 
        'created_at',
        'updated_at'
    ];
}
