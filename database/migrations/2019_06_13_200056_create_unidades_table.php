<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadesTable extends Migration {
    public function up() {
        Schema::create('unidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion_sg')->unique();
            $table->string('acro_sg')->nullable();
            $table->string('descripcion_pl')->unique();
            $table->string('acro_pl')->nullable();;
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('unidades');
    }
}
