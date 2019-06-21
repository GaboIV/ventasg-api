<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration {
    public function up() {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sesion_id');
            $table->string('nombre');
            $table->string('apertura');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('cuentas');
    }
}
