<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectChartersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_charters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->index(); 
            $table->text('project_purpose'); 
            $table->text('high_level_description'); 
            $table->text('project_boundaries'); 
            $table->text('key_deliverables'); 
            $table->text('high_level_requirements'); 
            $table->text('overall_project_risk'); 
            $table->text('preapproved_financial_resources'); 
            $table->text('project_exit_criteria'); 
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_charters');
    }
}
