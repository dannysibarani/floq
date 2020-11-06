<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiskRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risk_registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->index(); 
            $table->string('sid'); 
            $table->string('risk_category'); 
            $table->string('risk_event'); 
            $table->float('probability'); 
            $table->float('impact'); 
            $table->float('pxi'); 
            $table->double('cost_value'); 
            $table->double('contigency_value');
            $table->string('risk_response');
            $table->bigInteger('project_role_id')->unsigned()->index();
            $table->timestamps();

            $table->unique(array('project_id', 'sid')); 

            $table->foreign('project_id')->references('id')->on('projects'); 
            $table->foreign('project_role_id')->references('id')->on('project_roles'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('risk_registers');
    }
}
