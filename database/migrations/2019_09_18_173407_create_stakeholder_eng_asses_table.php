<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStakeholderEngAssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stakeholder_eng_asses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->index(); 
            $table->bigInteger('user_id')->unsigned()->index(); 
            $table->string('unware')->nullable(); 
            $table->string('resistant')->nullable(); 
            $table->string('neutral')->nullable(); 
            $table->string('supportive')->nullable(); 
            $table->string('leading')->nullable(); 
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects'); 
            $table->foreign('user_id')->references('id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stakeholder_eng_asses');
    }
}
