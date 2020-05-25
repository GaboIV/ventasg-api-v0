<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesasTable extends Migration {
    public function up() {
        Schema::create('tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier');
            $table->string('session_id');
            $table->string('open');
            $table->string('name');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('tables');
    }
}
