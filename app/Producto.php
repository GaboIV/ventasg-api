<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model {
    use Notifiable;

    protected $table = 'productos';

    protected $fillable = [
        'codigo', 
        'codigoAlt', 
        'descripcion',
        'unidad_id',
        'presentacion',
        'marca_id',
        'almacen_id',
        'grupo_id',
        'subgrupo_id',
        'imagen',
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

    protected $appends = ['image_url'];

    public function getImageUrlAttribute() {
        return ($this->imagen) ? url("images/productos/$this->imagen") : null;
    }
}
