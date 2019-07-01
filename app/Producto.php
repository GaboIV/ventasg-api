<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;
use Illuminate\Notifications\Notifiable;

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


    public function getImagenAttribute() {
        $img = $this->id . '.png';
        $ruta = '/app/public/productos/' . $this->id . '.png';
        if ( file_exists( storage_path($ruta) ) ) {
            return $img;
        } else {
            return null;
        }
    }
}
