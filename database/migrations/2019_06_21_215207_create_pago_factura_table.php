<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoFacturaTable extends Migration {
    public function up() {
        Schema::create('pago_factura', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial');
            $table->integer('tipo_pago_id');
            $table->decimal('cantidad');
            $table->integer('banco_origen_id');
            $table->integer('cuenta_destino_id');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('pago_factura');
    }
}
