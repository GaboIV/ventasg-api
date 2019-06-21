<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration{

    public function up() {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('documento')->unique();
            $table->string('telefono');
            $table->string('telefono2');
            $table->string('correo');
            $table->string('correo2');
            $table->longText('direccion');
            $table->integer('proveedor_id');
            $table->integer('user_id');
            $table->decimal('limite');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('clientes');
    }
}
