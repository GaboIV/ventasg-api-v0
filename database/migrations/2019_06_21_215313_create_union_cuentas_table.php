<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnionCuentasTable extends Migration {
    public function up() {
        Schema::create('accounts_union', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_id');
            $table->integer('session_id');
            $table->integer('control');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('accounts_union');
    }
}
