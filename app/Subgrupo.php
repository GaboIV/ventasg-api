<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subgrupo extends Model {
	protected $table = 'subgrupos';

    protected $fillable = [
        'descripcion', 
        'touch',
        'ordertouch',
        'grupo_id'
    ];
}
