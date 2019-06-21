<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoOpProductoTable extends Migration
{
    public function up() {
        Schema::create('tipo_operacion_producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->string('color');
            $table->string('estilo');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('tipo_operacion_producto');
    }
}
