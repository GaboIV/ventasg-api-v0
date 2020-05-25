<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('mobile_phone');
            $table->unsignedBigInteger('document_type')->nullable();
            $table->foreign('document_type')
                ->references('id')
                ->on('system_parameters');
            $table->string('document_number')->nullable();
            $table->unsignedBigInteger('user_type');
            $table->foreign('user_type')
                ->references('id')
                ->on('system_parameters');
            $table->string('password');
            $table->string('push')->nullable();
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
