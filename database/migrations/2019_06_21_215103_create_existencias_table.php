<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExistenciasTable extends Migration {
    public function up() {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('article_id');
            $table->integer('almac_id');
            $table->decimal('quantity');
            $table->dateTime('last_date');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('stocks');
    }
}
