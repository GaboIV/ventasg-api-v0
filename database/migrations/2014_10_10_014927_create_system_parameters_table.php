<?php

use Illuminate\Support\Facades\Schema;
use App\Constants\SystemMasterParameters;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_parameters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('group', SystemMasterParameters::getGroups());
            $table->enum('subgroup', SystemMasterParameters::getSubgroups())->nullable();
            $table->string('description');
            $table->string('abbreviation', 10)->nullable();
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('system_parameters');
    }
}
