<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicyResourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_resource', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('policy_id')->unsigned()->index(); 
            $table->bigInteger('resource_id')->unsigned()->index(); 
            $table->timestamps();

            $table->foreign('policy_id')->references('id')->on('policies'); 
            $table->foreign('resource_id')->references('id')->on('resources'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('policy_resource');
    }
}
