<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration {

    public function up() {
        Schema::create('grupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->integer('touch');
            $table->integer('ordertouch');
            $table->string('color');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('grupos');
    }
}
