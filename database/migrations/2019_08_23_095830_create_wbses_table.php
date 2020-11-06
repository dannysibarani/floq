<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


use App\Models\Enums\WbsType; 



class CreateWbsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wbses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->index(); 
            $table->integer('number')->nullable(); 
            $table->bigInteger('parent_id')->unsigned()->index()->nullable(); 
            $table->string('name'); 
            $table->string('type')->default(WbsType::DEFAULT); 

            $table->text('description')->nullable(); 

            $table->double('effort_hours')->nullable(); 
            $table->double('duration_estimation_days')->nullable(); 

            $table->datetime('start_date')->nullable(); 
            $table->datetime('stop_date')->nullable(); 

            $table->bigInteger('wbs_resource_id')->unsigned()->index()->nullable(); 
            $table->integer('labour_cost')->default(0); 
            $table->integer('physical_cost')->default(0); 
            $table->integer('reserve')->default(0); 
            $table->integer('estimate')->default(0); 

            $table->timestamps();


            $table->foreign('project_id')->references('id')->on('projects'); 
            $table->foreign('parent_id')->references('id')->on('wbses'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wbses');
    }
}
