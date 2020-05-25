<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration{

    public function up() {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('document')->unique();
            $table->string('phone')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('email');
            $table->string('email_2')->nullable();
            $table->longText('address')->nullable();
            $table->integer('provider_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->decimal('limit')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('clientes');
    }
}
