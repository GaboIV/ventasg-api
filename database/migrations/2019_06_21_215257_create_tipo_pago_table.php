<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoPagoTable extends Migration {
    public function up() {
        Schema::create('tipo_pago', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('descripcion');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('tipo_pago');
    }
}
