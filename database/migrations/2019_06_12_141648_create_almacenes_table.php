<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlmacenesTable extends Migration {

    public function up() {
        Schema::create('almacs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->string('coordinates')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('almacs');
    }
}
