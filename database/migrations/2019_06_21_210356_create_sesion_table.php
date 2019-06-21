<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSesionTable extends Migration {
    public function up() {
        Schema::create('sesion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usuario_id');
            $table->string('serial');
            $table->string('descripcion');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('sesion');
    }
}
