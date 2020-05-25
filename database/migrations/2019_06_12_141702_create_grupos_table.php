<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration {

    public function up() {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->integer('touch')->nullable();
            $table->integer('order_touch')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('groups');
    }
}
