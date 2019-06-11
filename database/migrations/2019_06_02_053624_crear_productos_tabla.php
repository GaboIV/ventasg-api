<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearProductosTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo')->unique();
            $table->string('codigoAlt');
            $table->string('descripcion', 1000);
            $table->integer('id_unidad');
            $table->string('presentacion');
            $table->integer('id_marca');
            $table->integer('id_almacen');
            $table->integer('id_grupo');
            $table->integer('id_subgrupo');
            $table->decimal('precio1', 15, 2);
            $table->decimal('precio2', 15, 2);
            $table->decimal('precio3', 15, 2);
            $table->decimal('costo', 15, 2);
            $table->integer('alicuota');
            $table->integer('v_comanda');
            $table->integer('v_caja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
