<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlmacenesTable extends Migration {

    public function up() {
        Schema::create('almacenes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->string('coordenadas');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('almacenes');
    }
}
