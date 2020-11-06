<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->index(); 
            $table->bigInteger('user_id')->unsigned()->index(); 
            $table->bigInteger('project_role_id')->unsigned()->nullable(); 
            $table->string('sid'); 
            $table->text('requirements')->nullable(); 
            $table->bigInteger('requirement_category_id')->unsigned()->index(); 
            $table->bigInteger('requirement_priority_id')->unsigned()->index(); 
            $table->bigInteger('requirement_phase_id')->unsigned()->nullable();
            $table->text('acceptance_criteria')->nullable(); 
            $table->text('business_objective')->nullable(); 
            $table->text('deliverable')->nullable(); 
            $table->timestamps();

            $table->unique(array('project_id', 'sid')); 

            $table->foreign('project_id')->references('id')->on('projects'); 
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->foreign('project_role_id')->references('id')->on('project_roles'); 

            $table->foreign('requirement_category_id')->references('id')->on('requirement_categories');
            $table->foreign('requirement_priority_id')->references('id')->on('requirement_priorities');
            $table->foreign('requirement_phase_id')->references('id')->on('requirement_phases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirements');
    }
}