<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersionamientoTable extends Migration {
    public function up() {
        Schema::create('versionamiento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('version');
            $table->longText('comentario');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('versionamiento');
    }
}
