<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectCharterSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_charter_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_charter_id')->unsigned()->index(); 
            $table->string('milestone'); 
            $table->datetime('due_date'); 
            $table->integer('order')->nullable(); 
            $table->string('description')->nullable(); 
            $table->timestamps();

            $table->foreign('project_charter_id')->references('id')->on('project_charters'); 
            $table->unique(array('project_charter_id', 'milestone')); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_charter_schedules');
    }
}