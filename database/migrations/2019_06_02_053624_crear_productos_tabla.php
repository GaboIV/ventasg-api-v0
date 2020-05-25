<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearProductosTabla extends Migration {

    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('altcode')->nullable();
            $table->string('description', 1000);
            $table->unsignedBigInteger('unit_id')->nullable();
            $table->string('presentation')->nullable();
            $table->integer('brand_id');
            $table->integer('almac_id')->nullable();
            $table->integer('group_id');
            $table->integer('subgroup_id')->nullable();
            $table->string('image')->nullable();
            $table->decimal('prize_1', 15, 2);
            $table->decimal('prize_2', 15, 2)->nullable();
            $table->decimal('prize_3', 15, 2)->nullable();
            $table->decimal('cost', 15, 2)->nullable();
            $table->integer('aliquot')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('products');
    }
}
