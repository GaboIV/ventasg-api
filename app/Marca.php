<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model {
    protected $table = 'marcas';

    protected $fillable = [
        'descripcion', 
        'image'
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute() {
        return ($this->image) ? url("images/marcas/$this->image") : null;
    }
}
