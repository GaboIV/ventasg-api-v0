<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoOpProductoTable extends Migration
{
    public function up() {
        Schema::create('operation_type_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->string('color');
            $table->string('style');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('operation_type_product');
    }
}
