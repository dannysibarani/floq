<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementPhasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirement_phases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->index(); 
            $table->string('name')->index(); 
            $table->string('description')->nullable(); 
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects'); 

            $table->unique(array('project_id', 'name')); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirement_phases');
    }
}
