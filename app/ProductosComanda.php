<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosComanda extends Model {

	protected $table = 'productos_comanda';

    protected $fillable = ['producto_id', 'orden', 'status'];

    public function producto() {
        return $this->belongsTo(Producto::class, 'producto_id', 'id');
    }
}
