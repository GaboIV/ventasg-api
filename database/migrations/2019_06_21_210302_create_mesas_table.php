<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesasTable extends Migration {
    public function up() {
        Schema::create('mesas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identificador');
            $table->string('sesion_id');
            $table->string('apertura');
            $table->string('nombre');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('mesas');
    }
}
