<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosSesionTable extends Migration {
    public function up() {
        Schema::create('productos_sesion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->integer('sesion_id');
            $table->decimal('cantidad');
            $table->decimal('precio');
            $table->decimal('alicuota');
            $table->longText('nota');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('productos_sesion');
    }
}
