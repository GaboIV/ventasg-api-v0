<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaTable extends Migration {
    public function up() {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('correlative');
            $table->string('printer');
            $table->string('session');
            $table->decimal('amount');
            $table->decimal('iva');
            $table->decimal('total');
            $table->boolean('status');
            $table->dateTime('date');
            $table->integer('cash_register_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('invoices');
    }
}
