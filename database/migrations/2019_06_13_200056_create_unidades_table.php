<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadesTable extends Migration {
    public function up() {
        Schema::create('units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description_sg')->unique();
            $table->string('acro_sg')->nullable();
            $table->string('description_pl')->unique();
            $table->string('acro_pl')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('units');
    }
}
