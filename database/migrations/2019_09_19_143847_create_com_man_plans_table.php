<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComManPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com_man_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->index(); 
            $table->bigInteger('user_id')->unsigned()->index(); 
            $table->string('information'); 
            $table->string('method'); 
            $table->string('timing_or_frequency'); 
            $table->string('sender_or_initiator'); 
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
        Schema::dropIfExists('com_man_plans');
    }
}
