<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosCajaTable extends Migration {
    public function up() {
        Schema::create('productos_caja', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('articulo_id');
            $table->integer('orden');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('productos_caja');
    }
}
