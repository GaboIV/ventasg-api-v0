<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosSesionTable extends Migration {
    public function up() {
        Schema::create('products_session', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->integer('session_id');
            $table->decimal('quantity');
            $table->decimal('prize');
            $table->decimal('aliquot');
            $table->longText('note');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('products_session');
    }
}
