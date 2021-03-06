<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoCaja extends Model {
	protected $table = 'productos_caja';

    protected $fillable = ['producto_id', 'orden', 'status'];

    public function producto() {
        return $this->belongsTo(Producto::class, 'producto_id', 'id');
    }
}
