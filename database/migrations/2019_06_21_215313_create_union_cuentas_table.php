<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnionCuentasTable extends Migration {
    public function up() {
        Schema::create('union_cuentas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cuenta_id');
            $table->integer('sesion_id');
            $table->integer('control');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('union_cuentas');
    }
}
