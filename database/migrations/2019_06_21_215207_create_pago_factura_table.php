<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoFacturaTable extends Migration {
    public function up() {
        Schema::create('invoice_pay', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial');
            $table->integer('pay_type_id');
            $table->decimal('amount');
            $table->integer('bank_id');
            $table->integer('account_id');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('invoice_pay');
    }
}
