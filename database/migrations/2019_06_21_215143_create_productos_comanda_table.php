<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosComandaTable extends Migration {
    public function up() {
        Schema::create('productos_comanda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('producto_id');
            $table->integer('orden')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('productos_comanda');
    }
}
