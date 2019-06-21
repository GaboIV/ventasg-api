<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaTable extends Migration {
    public function up() {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('correlativo');
            $table->string('impresora');
            $table->string('sesion');
            $table->decimal('monto_base');
            $table->decimal('iva');
            $table->decimal('total');
            $table->boolean('status');
            $table->dateTime('fecha_hora');
            $table->integer('caja_id');
            $table->integer('usuario_id');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('facturas');
    }
}
