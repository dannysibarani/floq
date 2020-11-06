<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualityMetricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quality_metrics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->index(); 
            $table->string('sid'); 
            $table->string('items'); 
            $table->text('metric'); 
            $table->text('measurement_method'); 
            $table->timestamps();

            $table->unique(array('project_id', 'sid')); 
            
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
        Schema::dropIfExists('quality_metrics');
    }
}
