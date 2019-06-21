<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExistenciasTable extends Migration {
    public function up() {
        Schema::create('existencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('articulo_id');
            $table->integer('almacen_id');
            $table->decimal('cantidad');
            $table->dateTime('fecha_ultima');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('existencias');
    }
}
