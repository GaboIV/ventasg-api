<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearProductosTabla extends Migration {

    public function up() {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo')->unique();
            $table->string('codigoAlt')->nullable();;
            $table->string('descripcion', 1000);
            $table->integer('unidad_id');
            $table->string('presentacion');
            $table->integer('marca_id');
            $table->integer('almacen_id')->nullable();;
            $table->integer('grupo_id');
            $table->integer('subgrupo_id')->nullable();;
            $table->decimal('precio1', 15, 2);
            $table->decimal('precio2', 15, 2)->nullable();
            $table->decimal('precio3', 15, 2)->nullable();
            $table->decimal('costo', 15, 2);
            $table->integer('alicuota');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('productos');
    }
}
