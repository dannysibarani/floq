<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectCharterAuthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_charter_authorities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_charter_id')->unsigned()->index(); 
            $table->text('staffing_decision'); 
            $table->text('budget_management_and_variance'); 
            $table->text('technical_decisions'); 
            $table->text('conflict_resolution'); 
            $table->text('sponsor_authority'); 
            $table->timestamps();

            $table->foreign('project_charter_id')->references('id')->on('project_charters'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_charter_authorities');
    }
}