<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubgruposTable extends Migration {

    public function up() {
        Schema::create('subgrupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->integer('touch');
            $table->integer('ordertouch');
            $table->string('grupo_id');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('subgrupos');
    }
}
