<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcasTable extends Migration {

    public function up() {
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('brands');
    }
}
